<?php
date_default_timezone_set('Asia/Kolkata');

// API Code
$intents = [
    'greeting' => ['hello', 'hi', 'hey', 'good morning', 'good afternoon', 'good evening'],
    'goodbye' => ['bye', 'see you later', 'goodbye', 'take care', 'have a nice day'],
    'thanks' => ['thanks', 'thank you', 'thanks a lot', 'i appreciate it'],
    'weather' => ['what is the weather like today?', 'how is the weather?', 'can you tell me about the weather?', 'what is the weather forecast?'],
    'time' => ['what time is it?', 'can you tell me the time?', 'time please'],
    'date' => ['what is today\'s date?', 'can you tell me the date?', 'date please'],
    'joke' => ['tell me a joke', 'give me a joke', 'joke please'],
    'quote' => ['give me a quote', 'quote please', 'inspirational quote'],
    'news' => ['what\'s the latest news?', 'give me some news', 'news update'],
    'music' => ['play some music', 'music please', 'song recommendation'],
    'movie' => ['recommend a movie', 'movie suggestion', 'what movie should I watch?'],
    'recipe' => ['give me a recipe', 'recipe please', 'cooking idea'],
    'gaming' => ['recommend a game', 'game suggestion', 'what game should I play?'],
    'book' => ['recommend a book', 'book suggestion', 'what book should I read?'],
    'exercise' => ['suggest an exercise', 'exercise recommendation', 'what exercise should I do?'],
    'fun_fact' => ['tell me a fun fact', 'interesting fact please', 'fun fact of the day'],
    'Health' => ['health tips', 'wellness advice', 'healthy living tips'],
    'Trivia' => ['fun trivia', 'random trivia', 'trivia of the day'],
    'Travel' => ['travel destination recommendation', 'best places to visit', 'vacation ideas'],
    'Language' => ['learn a new word', 'language learning tip', 'word of the day'],
    'Fashion' => ['fashion advice', 'latest fashion trends', 'style tips'],
    'Cooking' => ['cooking tip', 'culinary advice', 'food hacks'],
    'Gardening' => ['gardening tip', 'plant care advice', 'garden hacks'],
    'Financial' => ['money-saving tip', 'investment advice', 'financial planning tip'],
    'Motivation' => ['motivational message', 'inspirational quote', 'daily motivation'],
    'Relationship' => ['relationship advice', 'love tip', 'dating tip'],
    'Study' => ['study tip', 'exam preparation advice', 'learning strategy'],
    'Pet' => ['pet care tip', 'animal advice', 'pet training tip'],
    'Technology' => ['latest tech news', 'gadget recommendation', 'tech tip'],
    'Career' => ['job search advice', 'career development', 'workplace tip'],
    'Fitness' => ['workout routine', 'exercise motivation', 'nutrition guidance'],
    'DIY' => ['DIY project idea', 'crafting tip', 'home improvement suggestion'],
    'Mental Health' => ['stress management technique', 'mental well-being advice', 'mental health resource'],
    'Productivity' => ['time management strategy', 'organization tip', 'productivity app'],
    'Environment' => ['sustainability tip', 'eco-friendly living', 'environmental awareness'],
    'Parenting' => ['parenting advice', 'child development', 'family activity'],
    'Etiquette' => ['social etiquette', 'professional etiquette', 'dining etiquette'],
    'History' => ['historical event', 'famous figure', 'cultural heritage'],
    'Science' => ['scientific discovery', 'scientific principle', 'technology advancement'],
    'Art' => ['art movement', 'famous artwork', 'artistic technique'],
    'Spirituality' => ['spiritual practice', 'religious tradition', 'personal growth'],
    'Home Decor' => ['interior design trend', 'home organization tip', 'DIY home project'],
    'laugh' => ['lol', 'lmao', 'haha'],
];

$responses = array(
    'Health' => array(
        'response' => 'Remember to drink plenty of water throughout the day for hydration.'
    ),
    'Trivia' => array(
        'response' => 'Did you know that a group of flamingos is called a "flamboyance"?'
    ),
    'Travel' => array(
        'response' => 'Consider visiting Kyoto, Japan, known for its historic temples and beautiful gardens.'
    ),
    'Language' => array(
        'response' => 'Immerse yourself in the language by listening to podcasts or watching movies in the target language.'
    ),
    'Fashion' => array(
        'response' => 'Oversized and slouchy silhouettes are currently popular in the fashion industry.'
    ),
    'Cooking' => array(
        'response' => 'Try making a homemade pesto pasta dish with fresh basil, pine nuts, and Parmesan cheese.'
    ),
    'Gardening' => array(
        'response' => 'Choose drought-tolerant plants that are well-suited to your local climate and require less water.'
    ),
    'Financial' => array(
        'response' => 'Create a budget and stick to it to help you reach your financial goals.'
    ),
    'Motivation' => array(
        'response' => 'Believe you can and you\'re halfway there. - Theodore Roosevelt'
    ),
    'Relationship' => array(
        'response' => 'Communication is key in any healthy relationship. Make time to have open and honest conversations.'
    ),
    'Study' => array(
        'response' => 'Take regular breaks to help improve your concentration and retain information better.'
    ),
    'Pet' => array(
        'response' => 'Provide your pet with a balanced diet, plenty of exercise, and regular veterinary check-ups.'
    ),
    'Technology' => array(
        'response' => 'Artificial intelligence and machine learning are rapidly advancing in various industries.'
    ),
    'Career' => array(
        'response' => 'Tailor your resume and cover letter to each job you apply for to increase your chances of being noticed.'
    ),
    'laugh' => array(
        'response' => 'Haha, How may I Help you?'
    ),
    'Fitness' => array(
        'response' => 'Incorporate strength training exercises, such as squats and lunges, to build muscle and boost metabolism.'
    ),
    'DIY' => array(
        'response' => 'Create your own hanging planter using a mason jar and some macrame.'
    ),
    'Mental Health' => array(
        'response' => 'Practice deep breathing exercises or try journaling to help reduce feelings of stress and anxiety.'
    ),
    'Productivity' => array(
        'response' => 'Use the Pomodoro technique, which involves working in 25-minute intervals followed by short breaks.'
    ),
    'Environment' => array(
        'response' => 'Reduce your plastic waste by using reusable water bottles and shopping bags.'
    ),
    'Parenting' => array(
        'response' => 'Establish a consistent bedtime routine to help your child develop healthy sleep habits.'
    ),
    'Etiquette' => array(
        'response' => 'Practice active listening and avoid interrupting others during conversations.'
    ),
    'History' => array(
        'response' => 'The Berlin Wall was constructed in 1961 and stood as a symbol of the Cold War until its fall in 1989.'
    ),
    'Science' => array(
        'response' => 'The theory of general relativity, developed by Albert Einstein, revolutionized our understanding of the universe.'
    ),
    'Art' => array(
        'response' => 'The Impressionist movement, pioneered by artists like Claude Monet, focused on capturing the transient effects of light.'
    ),
    'Spirituality' => array(
        'response' => 'Meditation can help promote mindfulness, reduce stress, and foster inner peace.'
    ),
    'Home Decor' => array(
        'response' => 'Minimalist and Scandinavian-inspired design styles, featuring clean lines and natural materials, are currently popular.'
    ),
    'greeting' => array(
        'response' => 'Hello! How can I assist you today?'
    ),
    'goodbye' => array(
        'response' => 'Goodbye! Have a great day.'
    ),
    'thanks' => array(
        'response' => 'You\'re welcome! I\'m glad I could help.'
    ),
    'weather' => array(
        'response' => 'Unfortunately, I don\'t have access to real-time weather information.'
    ),
    'time' => array(
        'response' => 'The current time is ' . date("h:i A") . '.'
    ),
    'date' => array(
        'response' => 'Today\'s date is ' . date("F j, Y") . '.'
    ),
    'joke' => array(
        'response' => 'Why can\'t a bicycle stand up by itself? It\'s two-tired!'
    ),
    'quote' => array(
        'response' => '"The only way to do great work is to love what you do." - Steve Jobs'
    ),
    'news' => array(
        'response' => 'Unfortunately, I don\'t have the ability to provide real-time news updates.'
    ),
    'music' => array(
        'response' => 'I don\'t have the capability to play music, but I can suggest some great artists or genres if you\'d like!'
    ),
    'movie' => array(
        'response' => 'I don\'t have access to a database of movies, but I\'d be happy to discuss film genres, directors, or actors if you\'re interested.'
    ),
    'recipe' => array(
        'response' => 'I don\'t have a database of recipes, but I can provide some general cooking tips and advice if that would be helpful.'
    ),
    'gaming' => array(
        'response' => 'I don\'t have the capability to play or discuss video games, but I\'d be happy to chat about other hobbies or interests you might have.'
    ),
    'book' => array(
        'response' => 'I don\'t have a database of books, but I\'d be glad to discuss literature, writing, or reading in general if you\'re interested.'
    ),
    'exercise' => array(
        'response' => 'I don\'t have specific exercise routines, but I can provide general fitness tips and advice if that would be helpful.'
    ),
    'fun_fact' => array(
        'response' => 'Did you know that a group of flamingos is called a "flamboyance"?'
    ),
    'default' => array(
        'response' => 'I\'m afraid I don\'t have a specific response for that request. As an AI assistant, I have a wide range of knowledge, but there are some things I can\'t do. Please let me know if there\'s something else I can assist you with.'
    ),
);

// Function to preprocess user input
function preprocess($text)
{
    // Convert to lowercase and remove punctuation
    $text = strtolower($text);
    $text = preg_replace('/[^a-zA-Z0-9\s]/', '', $text);

    // Remove stopwords
    $stop_words = ['a', 'an', 'the', 'and', 'or', 'but', 'for', 'with', 'in', 'on', 'at', 'to', 'from'];

    $tokens = explode(' ', $text);
    $filtered_tokens = array_diff($tokens, $stop_words);

    return implode(' ', $filtered_tokens);
}

// Function to classify user intent
function classify_intent($text, $intents)
{
    $preprocessed_text = preprocess($text);
    $max_similarity = 0;
    $intent = 'default';

    foreach ($intents as $key => $examples) {
        foreach ($examples as $example) {
            $similarity = similar_text($example, $preprocessed_text);
            if ($similarity > $max_similarity) {
                $max_similarity = $similarity;
                $intent = $key;
            }
        }
    }

    return $intent;
}
?>