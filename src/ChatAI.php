<?php

require __DIR__ . "/../vendor/autoload.php";

class ChatAI {
    private string $apikey = "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";
    private array $prompt;
    private $openai;

    public function __construct() {
        $this->openai = OpenAI::client($this->apikey);
        $this->prompt = [
            ['role' => 'system', 'content' => 'Kamu adalah sebuah bot yang akan menjelaskan semua hal yang terkait dengan Talas'],
        ];
    }

    public function chat($message) {
        $message = array_merge($this->prompt, [
            ['role' => 'user', 'content' => $message],
        ]);

        $output = '';

        $res = $this->openai->chat()->createStreamed([
            'model' => 'gpt-3.5-turbo',
            'messages' => $message,
        ]);

        foreach ($res as $response) {
            $output .= $response->choices[0]->delta->content;
        }

        return $output;
    }
}
