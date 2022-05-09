<!doctype html>
<html>

<head>
  <title>H1 Complex Self</title>

  <script>

  var complexSelf =
  {
    "Name": "Navia Eul-Tran",
    "Age": 21,
    "Married":false,
    "Classes":["CSIS 2440", " CSIS 1550", " CSIS 2470 "],
    "Hobbies":
      {
        "Reading": "I like to read books, I've found myself being really into non-fiction nature books like 'Into the Wild'. I tend to gravitate towards non-fiction books and self help books.",
        "Art": "I love anything that allows me to let my creativity flow. Some things that I'm really into right now are painting, sewing, and pottery.",
        "Snowboard":"I haven't been snowboarding for too long but I find it to be so much fun. It's a great way to clear my head and truly admire the beauty of the scenery, it really reminds me how exciting life can be.",
        "Hangout":"I love to spend my time hanging out with the people I love the most whether it be my siblings, boyfriend, friends, or parent. This is probably my favorite way to spend my free time if I'm not doing my other hobbies."
      }
  }
  </script>
</head>

<body>
  <div id="main" class="contain">
      <script>
        hobbyKey = Object.keys(complexSelf.Hobbies);
        randomkey = Math.floor(Math.random()* hobbyKey.length);

        document.write("<p>My name is " + complexSelf.Name + "</p>");
        document.write("<p>I am " + complexSelf.Age + " years old </p>");
        document.write("<p>I'm " + (complexSelf.Married ? "married" : "not married") + "</p>");
        document.write("<p>I am currently at SLCC to get my associates degree in general studies and computer science. This is my last semester here and these are the classes I am currently taking, " + complexSelf.Classes);
        document.write("<p>This is what I like to do with my free time: " +  complexSelf.Hobbies[hobbyKey[randomkey]] + "</p>");
      </script>

  </div>
</body>

</html>
