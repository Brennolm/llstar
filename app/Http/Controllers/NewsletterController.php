<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsletterController extends Controller {

    public function store(Request $request): RedirectResponse {

        $validated = $request->validate([
            'newsletter_email' => ['required', 'email', 'max:255'],
        ]);

        NewsletterSubscriber::firstOrCreate(['email' => $validated['newsletter_email']]);

        return back()->with('newsletter_status', 'Inscrição realizada com sucesso!');

    }

}