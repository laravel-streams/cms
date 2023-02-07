<?php

namespace App\Components;

use Streams\Ui\Components\Form;
use Illuminate\Support\Facades\Request;

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
            <form ui:submit.prevent="submit" {!! $component->htmlAttributes([
                'class' => ['flex mx-auto w-72 flex-col space-y-2'],
            ]) !!}>
                <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    value="{{ $component->name }}"
                    class="border border-gray-400 rounded shadow-md p-3 text-gray-600"
                    required>

                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    value="{{ $component->email }}"
                    class="border border-gray-400 rounded shadow-md p-3 text-gray-600"
                    required>

                @ui('textarea', [
                    'name' => 'message',
                    'placeholder' => 'Message',
                    'value' => $component->message,
                    'required' => true,
                    'attributes' => [
                        'class' => ['w-full border border-gray-400 rounded shadow-md p-3 text-gray-600'],
                    ],
                ])

                <button type="submit" class="block bg-green-500 text-white text-base font-semibold py-3 rounded shadow hover:bg-green-600">Submit</button>
            </form>
        </div>
    blade;

    public function submit()
    {
        // Send email
        dd(Request::input());
    }
}
