<?

/*recipe loader for tp8php*/

//start taco dip

$recipes = array();

$recipes["tacoDip"] = array();
$recipes["tacoDip"]["ingredients"] = array();
$recipes["tacoDip"]["equipment"] = array();
$recipes["tacoDip"]["directions"] = array();

$recipes["tacoDip"]["ingredients"][] = "1 can of refried beans";
$recipes["tacoDip"]["ingredients"][] = "1 block of softened cream cheese";
$recipes["tacoDip"]["ingredients"][] = "1 packet of taco seasoning";
$recipes["tacoDip"]["ingredients"][] = "1 16oz package of shredded mexican cheese";
$recipes["tacoDip"]["ingredients"][] = "1/2 cup of sour cream";
$recipes["tacoDip"]["ingredients"][] = "Tortilla chips";
$recipes["tacoDip"]["ingredients"][] = "Taco toppings of your choice <ul>
    <li>Chopped roma tomatoes</li>
    <li>Cilantro</li>
    <li>Lettuce</li>
  </ul>";

$recipes["tacoDip"]["equipment"][] = "Oven";
$recipes["tacoDip"]["equipment"][] = "13' x 9' pan";
$recipes["tacoDip"]["equipment"][] = "Can opener";
$recipes["tacoDip"]["equipment"][] = "Mashing untensil";
$recipes["tacoDip"]["equipment"][] = "Knife";
$recipes["tacoDip"]["equipment"][] = "Cutting board";
$recipes["tacoDip"]["equipment"][] = "2 bowls";

$recipes["tacoDip"]["directions"][] = "Preheat oven to 350 degrees F (180 degrees C).";
$recipes["tacoDip"]["directions"][] = "Mix refried beans, cream cheese, sour cream, and the taco seasoning mix in a bowl and mash until texture is smooth.";
$recipes["tacoDip"]["directions"][] = "Pour the mixture into the 13' x 9' pan and spread evenly.";
$recipes["tacoDip"]["directions"][] = "Top dip with a layer of cheese until dip is covered.";
$recipes["tacoDip"]["directions"][] = "Bake for about 20 minutes or until cheese is melted.";
$recipes["tacoDip"]["directions"][] = "Chop tomatoes into dices and peel cilantro leaves off the stem or prepare your taco toppings so that they are ready when the dip is done.";
$recipes["tacoDip"]["directions"][] = "Sprinkle your toppings onto the dip.";
$recipes["tacoDip"]["directions"][] = "Serve tortilla chips in a bowl on the side.";



//start peach crisp


$recipes["peachCrisp"] = array();
$recipes["peachCrisp"]["ingredients"] = array();
$recipes["peachCrisp"]["equipment"] = array();
$recipes["peachCrisp"]["directions"] = array();

$recipes["peachCrisp"]["ingredients"][] = "4 cups sliced peaches";
$recipes["peachCrisp"]["ingredients"][] = "1/2 cup all-purpose flour";
$recipes["peachCrisp"]["ingredients"][] = "1/2 cup brown sugar";
$recipes["peachCrisp"]["ingredients"][] = "1/2 cup cold butter";
$recipes["peachCrisp"]["ingredients"][] = "1 teaspoon ground cinnamon";
$recipes["peachCrisp"]["ingredients"][] = "1/4 teaspoon salt";
$recipes["peachCrisp"]["ingredients"][] = "1 cup rolled oats";

$recipes["peachCrisp"]["equipment"][] = "Oven";
$recipes["peachCrisp"]["equipment"][] = "8' x 8'' baking dish";
$recipes["peachCrisp"]["equipment"][] = "Measuring cups";
$recipes["peachCrisp"]["equipment"][] = "Measuring spoons";
$recipes["peachCrisp"]["equipment"][] = "Bowl";
$recipes["peachCrisp"]["equipment"][] = "Mixing spoon";
$recipes["peachCrisp"]["equipment"][] = "Knife";

$recipes["peachCrisp"]["directions"][] = "Heat oven to 350 degrees F (175 degrees C).";
$recipes["peachCrisp"]["directions"][] = "Arrange sliced peaches evenly in an 8' x 8' baking dish.";
$recipes["peachCrisp"]["directions"][] = "Mix flour, brown sugar, butter, cinnamon, and salt in a bowl until crumbly. Fold oats into flour mixture; sprinkle mixture evenly over peaches, pressing down lightly.";
$recipes["peachCrisp"]["directions"][] = "Bake in the preheated oven (about 30 minutes) until crispy and golden brown on top.";
$recipes["peachCrisp"]["directions"][] = "Let cool and enjoy!";


//start fluffy french toast
$recipes["fluffyFrenchToast"] = array();
$recipes["fluffyFrenchToast"]["ingredients"] = array();
$recipes["fluffyFrenchToast"]["equipment"] = array();
$recipes["fluffyFrenchToast"]["directions"] = array();

$recipes["fluffyFrenchToast"]["ingredients"][] = "1/4 cup all-purpose flower";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 cup milk";
$recipes["fluffyFrenchToast"]["ingredients"][] = "3 eggs";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 tablespoon white sugar";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 teaspoon vanilla extract";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1/2 teaspoon ground cinnamon";
$recipes["fluffyFrenchToast"]["ingredients"][] = "1 pinch salt";
$recipes["fluffyFrenchToast"]["ingredients"][] = "12 thick slices of bread";
$recipes["fluffyFrenchToast"]["ingredients"][] = "Oil";

$recipes["fluffyFrenchToast"]["equipment"][] = "Stove";
$recipes["fluffyFrenchToast"]["equipment"][] = "Measuring cups";
$recipes["fluffyFrenchToast"]["equipment"][] = "Large mixing bowl";
$recipes["fluffyFrenchToast"]["equipment"][] = "Whisk";
$recipes["fluffyFrenchToast"]["equipment"][] = "Griddle or frying pan";

$recipes["fluffyFrenchToast"]["directions"][] = "Measure all-purpose flour and pour into large mixing bowl.";
$recipes["fluffyFrenchToast"]["directions"][] = "Slowly whisk in milk, eggs, sugar, vanilla extract, cinnamon, and salt until the consistancy is smooth.";
$recipes["fluffyFrenchToast"]["directions"][] = "Lightly oil a griddle or frying pan over medium heat.";
$recipes["fluffyFrenchToast"]["directions"][] = "Soak the bread slices into the milk mixture.";
$recipes["fluffyFrenchToast"]["directions"][] = "Cook the bread slices on the griddle or frying pan. Make sure each side of the bead is golden brown Serve while still hot.";


$requestedID = $_GET["recipeID"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

$requestedList = $_GET["recipeList"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);


//use $requestedID and $requestedList in the multideimensional array and save it to $requestedOutput
$requestedOutput = $recipes[$requestedID][$requestedList];

$requestedJSON = "0";

if ($requestedOutput != null) {
  $requestedJSON = json_encode($requestedOutput);
}

//output the JSON back to the AJAX request
echo $requestedJSON;


?>




















