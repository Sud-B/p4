<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/sams.css" type="text/css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Permanent+Marker">
    <title>Sam's Soup shop</title>
</head>
<body>
<header>
    <h1> Sam's Soup shop</h1>
</header>
<div class="border">
    <article>
        <h2>About us</h2>
        <p>We are a very special soup shop. We make and sell all kinds of soup. We have soups from France, from Italy, from Senegal, from Korea, from India, from China and some surprises that you would not expect. Come try our soup. </p>
        <p><img src="/image/tofugreenssoup.jpg" alt="tofugreensoup"></p>
        <p><img src="/image/tomcheesesoup.jpg" alt="tomatocheesesoup"></p>
        <p><img src="/image/hotsoursoup.jpg" alt="hotandsoursoup"></p>
        <p><img src="/image/frenchonionsoup.jpg" alt="frenchonionsoup"></p>
    </article>
    <aside>
        <h2>Soup Menu ($12 each) : </h2>
        <p> Our daily specials:</p>
        <ul>
            <li>Monday: Mauritian Meat</li>
            <li>Tuesday: Tunisian Turkey</li>
            <li>Wednesday: Welsh Wombat</li>
            <li>Thursday: Thai Turnip</li>
            <li>Friday: French Fish </li>
            <li>Saturday: Senegalese Sausage</li>
            <li>Sunday: Spanish Sensation</li>
        </ul>
        <p> Also, our daily variety:</p>
        <ul>
            <li>Tofu and Greens</li>
            <li>French Onion</li>
            <li>Tomato and Cheese</li>
            <li>Korean Kimchi</li>
            <li>Italian Escarole Bean</li>
            <li>Indian Lentil </li>
        </ul>
    </aside>
</div>
<br>
<div class="border">
    <h2>Enter the order information for your Soup below:</h2>
    <form method='GET' action='/orderinfo/index'>
        <fieldset>
            <legend>Your contact information</legend>
            <label for="name">Your name</label>
            <input type="text" id="name" autofocus>
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" id="email">
            <br>
            <br>
            <label for="phone">Phone number</label>
            <input type="tel" id="phone" placeholder="Don't forget the area code!">
            <br>
            <br>
        </fieldset>
        <br>
        <br>
        <fieldset>
            <legend>About your soup </legend>
            <label for="date">Requested pickup date (we work every day)</label>
            <input type="date" id="date">
            <br>
            <br>
            <label for="date">Requested pickup time (we work from 11 am to 11 pm)</label>
            <input type="time" id="time">
            <br>
            <br>
            <p>What type of soup?</p>
            <label>
                <input type="radio" name="soup" id="soup" value="soupofday" checked> Soup of the day
            </label>
            <br>
            <label>
                <input type="radio" name="soup" id="soup" value="tofugreens"> Tofu and Greens
            </label>
            <br>
            <label>
                <input type="radio" name="soup" id="soup" value="frenchonion"> French Onion
            </label>
            <br>
            <label>
                <input type="radio" name="soup" id="soup" value="tomatocheese"> Tomato Cheese
            </label>
            <br>
            <label>
                <input type="radio" name="soup" id="soup" value="koroankimci"> Korean Kimchi
            </label>
            <br>
            <label>
                <input type="radio" name="soup" id="soup" value="iteccbean"> Italian Escarole Bean
            </label>
            <br>
            <label>
                <input type="radio" name="soup" id="soup" value="indlentil"> Indian Lentil
            </label>
            <br>
        </fieldset>
        <br>
        <br>
        <fieldset>
            <input type="submit" name="Todo" value="Place your Order"/>
            <br>
        </fieldset>
    </form>
</div>
<footer>
    <p>Located at 3330 Broadway, NY 10031; Phone: 212-222-4242</p>
</footer>
</body>
</html>
