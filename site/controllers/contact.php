<?php
use Kirby\Cms\App;

return function (App $kirby, $page) {
    if ($kirby->request()->is('POST')) {
        $data = [
            'name' => get('name'),
            'email' => get('email'),
            'comments' => get('comments'),
        ];

        $validations = [
            'name' => ['required', 'minLength' => 3],
            'email' => ['required', 'email'],
            'comments' => ['minLength' => 5],
        ];

        $messages = [
            'name' => 'Introduce a valid name',
            'email' => 'Introduce a valid email',
            'comments' => 'Introduce a valid comment',
        ];

        if ($errors = invalid($data, $validations, $messages)) {
            return [
                'errors' => $errors,
            ];
        }

        try {
            $kirby->email([
                'form' => 'welcome@usercompany.com',
                'to' => 'someone@gmail.com',
                'subject' => 'Welcome',
                'body' => 'Email contact',
            ]);
        } catch (Exception $error){
            echo $error;
        }

        return [
            'success' => true,
            'message' => 'Your message has been send succesfully',
        ];
    }
};