//function to load a file from the URL "fromFile" into the object "whereTo"
function loadFileInto(recipeID, listName, whereTo) {

  // 1. creating a new XMLHttpRequest object
  ajax = new XMLHttpRequest();

  // 2. define the fromFile variable with the passed recipe name and list
  fromFile = "recipes.php?recipeID=" + recipeID + "&recipeList=" + listName;
  console.log("From URL: " + fromFile);

  // 3. defines the GET/POST method, source, and async value of the AJAX object
  ajax.open("GET", fromFile, true);

  // 4. provides code to do something in response to the AJAX request
  ajax.onreadystatechange = function() {
    if ((this.readyState == 4) && (this.status == 200)) {

      console.log("AJAX response: " + this.responseText);

      if (this.responseText != 0) {
        //parse JSON into an array
        responseArray = JSON.parse(this.responseText);

        //loop through the array to build up <li> tags for the list
        responseHTML = "";
        for (x = 0; x < responseArray.length; x++) {
          responseHTML += "<li>" + responseArray[x] + "</li>";
        }
        //update the DOM with the response HTML
        document.querySelector(whereTo).innerHTML = responseHTML;

      } else {
        console.log("Error: no recipe/list found");
      }

    } else if ((this.readyState == 4) && (this.status != 200)) {
      console.log("Error: " + this.responseText);
    }

  } // end ajax.onreadystatechange function

  // initiate request and wait for response
  ajax.send();

}

// New receipe object- generic recipe creator
function Recipe(recipeName, contributorName, imageURL, recipeID) {

  //example shows recipe not recipeName after this. which one is correct?
  this.recipeName = recipeName;
  this.contributor = contributorName;
  this.imageURL = imageURL;
  this.id = recipeID;


  this.displayRecipe = function() {
    document.querySelector("#heroimage h1").innerHTML = this.recipeName;
    document.querySelector("#contributor").innerHTML = this.contributor;
    document.querySelector("#heroimage").style.backgroundImage = "url(" + this.imageURL + ")";

    loadFileInto(this.id, "ingredients", "#ingredients ul");
    loadFileInto(this.id, "equipment", "#equipment ul");
    loadFileInto(this.id, "directions", "#directions ol");
  }

}


TacoDip = new Recipe("Taco Dip",
  "Camryn Moore",
  "https://images.unsplash.com/photo-1523634700860-90d0ef74f137?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1450&q=80",
  "tacoDip"
);


PeachCrisp = new Recipe("Peach Crisp",
  "Zaire Moon",
  "https://images.unsplash.com/photo-1639588473831-dd9d014646ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80",
  "peachCrisp"
);

FluffyFrenchToast = new Recipe("Fluffy French Toast",
  "Analysse Palomares",
  "https://images.unsplash.com/photo-1639108094328-2b94a49b1c2e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80",
  "fluffyFrenchToast"
);



window.onload = function() {
  document.querySelector("#firstRecipe").onclick = function() {
    TacoDip.displayRecipe();
  }
    document.querySelector("#secondRecipe").onclick = function() {
      PeachCrisp.displayRecipe();
    }
      document.querySelector("#thirdRecipe").onclick = function() {
        FluffyFrenchToast.displayRecipe();
      }
}
