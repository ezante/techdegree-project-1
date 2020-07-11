<?php

$quotes = [
    [
        'quote' => 'Programs must be written for people to read, and only incidentally for machines to execute.',
        'source' => 'Harold Abelson',
        'citation' => 'Structure and Interpretation of Computer Programs',
        'year' => 1984,
    ],
    [
        'quote' => 'You might not think that programmers are artists, but programming is an extremely creative profession. It\'s logic-based creativity.',
        'source' => 'John Romero',
        'tag' => 'programming inspiration',
    ],
    [
        'quote' => 'No person has the power to have everything they want, but it is in their power not to want what they don\'t have, and to cheerfully put to good use what they do have.',
        'source' => 'Seneca',
    ],
    [
        'quote' => 'All our dreams can come true, if we have the courage to pursue them.',
        'source' => 'Walt Disney',
        'tag' => 'inspiration',
    ],
    [
        'quote' => 'I\'ve missed more than 9,000 shots in my career. I\'ve lost almost 300 games. 26 times I\'ve been trusted to take the game winning shot and missed. I\'ve failed over and over and over again in my life and that is why I succeed.',
        'source' => 'Michael Jordan',
    ],
    [
        'quote' => 'Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.',
        'source' => 'Pele',
        'tag' => 'success',
    ],
    [
        'quote' => 'The goal is not to be better than the other man, but your previous self.',
        'source' => 'Dalai Lama',
    ],
    [
        'quote' => 'If you are successful, it is because somewhere, sometime, someone gave you a life or an idea that started you in the right direction. Remember also that you are indebted to life until you help some less fortunate person, just as you were helped.',
        'source' => 'Melinda Gates',
    ],
    [
        'quote' => 'Simplicity is prerequisite for reliability.',
        'source' => 'Edsger W. Dijkstra',
    ],
    [
        'quote' => 'The best thing about a boolean is even if you are wrong, you are only off by a bit.',
        'source' => 'Unknown',
        'tag' => 'funny',
    ],
];

/**
 * Get random quote from an array of quotes.
 */
function getRandomQuote($array) {
    return $array[array_rand($array)];
}

/**
 * Transform quote data to html and print it.
 */
function printQuote($array) {
    $quote = getRandomQuote($array);

    $html = '';
    $html .= '<p class="quote">'.$quote['quote'].'</p>';
    $html .= '<p class="source">'.$quote['source'];

    foreach (['citation', 'year', 'tag'] as $item) {
        if (isset($quote[$item])) {
            $html .= " <span class=\"{$item}\">{$quote[$item]}</span>";
        }
    }

    echo $html.'</p>';
}

/**
 * Return random color in Hex.
 */
function getRandomColor() {
    return '#'.dechex(mt_rand(0, 16777215)); // 16777215 is ffffff in Hex
}
