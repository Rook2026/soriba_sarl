<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Expert;
use App\Models\NewsletterSubscriber;
use App\Models\Project;
use App\Models\Service;
use App\Models\Stat;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        $services = Service::where('actif', true)->orderBy('ordre')->take(6)->get();
        $experts  = Expert::where('actif', true)->orderBy('ordre')->get();
        $stats    = Stat::where('section', 'home')->where('actif', true)->orderBy('ordre')->get();

        return view('frontend.home', compact('services', 'experts', 'stats'));
    }

    public function about()
    {
        $experts = Expert::where('actif', true)->orderBy('ordre')->get();
        $stats   = Stat::where('section', 'about')->where('actif', true)->orderBy('ordre')->get();

        return view('frontend.about', compact('experts', 'stats'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactSend(Request $request)
    {
        $validated = $request->validate([
            'first_name'   => 'required|string|max:100',
            'last_name'    => 'required|string|max:100',
            'email'        => 'required|email|max:255',
            'organisation' => 'nullable|string|max:255',
            'secteur'      => 'nullable|string|max:100',
            'message'      => 'required|string|min:10|max:5000',
        ]);

        $contact = Contact::create(array_merge($validated, [
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]));

        // Envoi email — activer en production en configurant SMTP dans .env
        // En local (MAIL_HOST=127.0.0.1), l'email ne part pas mais le contact est sauvegardé
        if (config('mail.mailers.smtp.host') !== '127.0.0.1') {
            try {
                \Mail::raw(
                    "Nouveau message de : {$contact->first_name} {$contact->last_name}\n" .
                    "Email : {$contact->email}\n" .
                    "Organisation : {$contact->organisation}\n" .
                    "Secteur : {$contact->secteur}\n\n" .
                    "Message :\n{$contact->message}",
                    function ($message) use ($contact) {
                        $message->to('contact@soriba-sarl.com')
                                ->subject('Nouveau contact SORIBA SARL — ' . $contact->first_name . ' ' . $contact->last_name)
                                ->replyTo($contact->email);
                    }
                );
            } catch (\Exception $e) {
                // Email échoue silencieusement — le contact est quand même sauvegardé
            }
        }

        return redirect()->route('contact')
            ->with('success', 'Votre message a bien été envoyé. Nous vous répondrons sous 48h.');
    }

    public function newsletterSubscribe(Request $request)
    {
        $request->validate(['email' => 'required|email|max:255']);

        NewsletterSubscriber::firstOrCreate(
            ['email' => $request->email],
            ['statut' => 'actif']
        );

        return back()->with('newsletter_success', 'Vous êtes bien abonné(e) à notre newsletter.');
    }

    public function partners()
    {
        return view('frontend.partners');
    }

    public function services()
    {
        $services = Service::where('actif', true)->orderBy('ordre')->get();
        return view('frontend.services.services', compact('services'));
    }

    public function serviceShow($slug)
    {
        $service  = Service::where('slug', $slug)->where('actif', true)->firstOrFail();
        $projects = Project::where('service_id', $service->id)->where('actif', true)->orderBy('ordre')->take(3)->get();
        return view('frontend.services.details', compact('service', 'projects'));
    }

    public function experts()
    {
        $experts = Expert::where('actif', true)->orderBy('ordre')->get();
        return view('frontend.experts.experts', compact('experts'));
    }

    public function expertShow($slug)
    {
        $expert = Expert::where('slug', $slug)->where('actif', true)->firstOrFail();
        return view('frontend.experts.details', compact('expert'));
    }

    public function blog(Request $request)
    {
        $categories = Category::orderBy('ordre')->get();
        $query      = Article::with(['category', 'author'])
                        ->where('statut', 'publie')
                        ->whereNotNull('published_at');

        if ($request->filled('categorie')) {
            $query->whereHas('category', fn($q) => $q->where('slug', $request->categorie));
        }

        $articles = $query->latest('published_at')->paginate(9);
        return view('frontend.blogs.blog', compact('articles', 'categories'));
    }

    public function blogShow($id)
    {
        $article = Article::with(['category', 'author'])
                    ->where('statut', 'publie')
                    ->findOrFail($id);
        $article->increment('vues');

        $related = Article::with('category')
            ->where('statut', 'publie')
            ->where('id', '!=', $article->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('frontend.blogs.details', compact('article', 'related'));
    }

    public function projects(Request $request)
    {
        $services = Service::where('actif', true)->get();
        $stats    = Stat::where('section', 'projects')->where('actif', true)->orderBy('ordre')->get();
        $query    = Project::with('service')->where('actif', true)->orderByRaw('featured DESC, ordre ASC');

        if ($request->filled('secteur')) {
            $query->where('service_id', $request->secteur);
        }

        $projects = $query->get();
        return view('frontend.projects.projects', compact('projects', 'services', 'stats'));
    }

    public function projectShow($id)
    {
        $project  = Project::with(['service'])->where('actif', true)->findOrFail($id);
        $stats    = Stat::where('section', 'projects')->where('actif', true)->orderBy('ordre')->get();
        $services = Service::where('actif', true)->get();
        return view('frontend.projects.details', compact('project', 'stats', 'services'));
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function termsConditions()
    {
        return view('frontend.terms_conditions');
    }
}