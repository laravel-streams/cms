<?php

namespace App\Components;

use App\Mail\ContactRequest;
use Streams\Ui\Components\Form;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Form
{
    public array $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];

    public ?string $name = null;
    public ?string $email = null;
    public ?string $message = null;

    public string $template = <<<'blade'
        <div>
            <form wire:submit.prevent="submit" {!! $component->htmlAttributes([
                'class' => ['flex mx-auto w-72 flex-col space-y-2'],
            ]) !!}>
                <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    value="{{ $component->name }}"
                    class="border p-2"
                    required>

                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    value="{{ $component->email }}"
                    class="border p-2"
                    required>

                @livewire('textarea', [
                    'name' => 'message',
                    'placeholder' => 'Message',
                    'value' => $component->message,
                    'required' => true,
                    'attributes' => [
                        'class' => ['w-full border p-2'],
                    ],
                ])

                <button type="submit" class="block bg-black text-white text-base p-2">Submit</button>
            </form>
        </div>
    blade;

    public function submit()
    {
        // Mail the contact request.
    }
}
