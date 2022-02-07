app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "view/main.html",
	controller:"myCtrl"
  })
  .when("/about", {
    templateUrl : "view/about.html",
	controller:"myCtrl"
  })
  .when("/contact", {
    templateUrl : "view/contact.html",
	controller:"myCtrl"
  })
  
//Books
  .when("/books_details", {
    templateUrl : "view/books_details.html",
	controller:"myCtrl"
  })
  .when("/books", {
    templateUrl : "view/books.html",
	controller:"myCtrl"
  })
//Authors
  .when("/authors_details", {
    templateUrl : "view/authors_details.html",
	controller:"myCtrl"
  })
  .when("/authors", {
    templateUrl : "view/authors.html",
	controller:"myCtrl"
  })
  //Category
  .when("/category_details", {
    templateUrl : "view/category_details.html",
	controller:"myCtrl"
  })
  .when("/category", {
    templateUrl : "view/category.html",
	controller:"myCtrl"
  })
  //Languages
  .when("/languages_details", {
    templateUrl : "view/languages_details.html",
	controller:"myCtrl"
  })
  .when("/languages", {
    templateUrl : "view/languages.html",
	controller:"myCtrl"
  })
  //Publisher
  .when("/publisher_details", {
    templateUrl : "view/publisher_details.html",
	controller:"myCtrl"
  })
  .when("/publisher", {
    templateUrl : "view/publisher.html",
	controller:"myCtrl"
  })
  //Formats
  .when("/formats_details", {
    templateUrl : "view/formats_details.html",
	controller:"myCtrl"
  })
  .when("/formats", {
    templateUrl : "view/formats.html",
	controller:"myCtrl"
  })
  //Staff
  .when("/staff_details", {
    templateUrl : "view/staff_details.html",
	controller:"myCtrl"
  })
  .when("/staff", {
    templateUrl : "view/staff.html",
	controller:"myCtrl"
  })
  //Clients
  .when("/clients_details", {
    templateUrl : "view/clients_details.html",
	controller:"myCtrl"
  })
  .when("/clients", {
    templateUrl : "view/clients.html",
	controller:"myCtrl"
  })
  //Stores
  .when("/stores_details", {
    templateUrl : "view/stores_details.html",
	controller:"myCtrl"
  })
  .when("/stores", {
    templateUrl : "view/stores.html",
	controller:"myCtrl"
  })
  //Transactions
  .when("/transactions_details", {
    templateUrl : "view/transactions_details.html",
	controller:"myCtrl"
  })
  .when("/transactions", {
    templateUrl : "view/transactions.html",
	controller:"myCtrl"
  });

});