var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl',function($scope,$http) {
//controller
$scope.firstName="Natalija Ognenova";
$scope.error=false;

function alertFun()
{
	console.log("AlertFun");
}

$scope.save=function()
{
	alertFun();
console.log("\nHello "+$scope.first_name);
	$scope.error=true;
}

/***********************************************************************************************************************************************************/
/*                                                           JSON                                                                                           */
/***********************************************************************************************************************************************************/
//$scope.table_name[{"column1":"column1 value"}]
// $scope.books = [
// 	{"books_id":1,"books_name":"You Can Heal Your Life","pages":272,"price":16.00,"language_id":1,"publisher_id":2,"format_id":1,"category_id":10,"authors_id":11,"stores_id":2,"short_text":"dfghj","long_Text":"dyfhghb","year":1984},
// 	{"books_id":4,"books_name":"The Power of Now","pages":120,"category_id":5},
// ];
// $scope.authors = [
// 	{"authors_id":1,"authors_first_name":"Stanislaus","authors_last_name":"Kennedy"},
// 	{"authors_id":2,"authors_first_name":"Sally","authors_last_name":"Rooney"}
// ]
// $scope.category = [
// 	{"category_id":1,"category_name":"Romance"},
// 	{"category_id":5,"category_name":"Crime & Thriller"}
// ];
// $scope.clients = [
// 	{"clients_id":1,"clients_first_name":"Ivona","clients_last_name":"Dimovska","clients_town":"Bitola","clients_country":"Macedonia","clients_continent":"Europe","clients_address":"Stiv Naumov","clients_address_number":"53","clients_number":"00000000000078555345","clients_email":"ivonadimovska@gmail.com","clients_username":"ivona.dimovska","clients_password":"ivona123"}
// ];
// $scope.formats = [
// 	{"format_id":1,"format_name":"Paperback"},
// 	{"format_id":2,"format_name":"PDF"}
// ];
// $scope.languages = [
// 	{"language_id":1,"language_name":"English"},
// 	{"language_id":2,"language_name":"German"}
// ];
// $scope.publisher = [
// 	{"publisher_id":2,"publisher_name":"Hay House Inc","publisher_country":"Carlsbad,United States"},
// 	{"publisher_id":3,"publisher_name":"Hodder & Stoughton","publisher_country":"London, United Kingdom"}
// ];
// $scope.staff = [
// 	{"staff_id":1,"staff_first_name":"Ana","staff_last_name":"Weber","staff_town":"San Diego","staff_country":"California","staff_continent":"America","staff_address":"Henry Street","staff_address_number":3910,"staff_number":"00000000000991023488","staff_email":"anaweber@gmail.com"},
// 	{"staff_id":2,"staff_first_name":"Nicholas","staff_last_name":"Lautner","staff_town":"Paris","staff_country":"France","staff_continent":"Europe","staff_address":"place Stanislas","staff_address_number":50,"staff_number":"00000000007654325488","staff_email":"nicholaslautner@gmail.com"}
// ];
// $scope.stores = [
// 	{"stores_id":1,"stores_name":"Via","stores_town":"Paris","stores_country":"France","stores_continent":"Europe","stores_address":"Rue de la Pompe","stores_address_number":"34","stores_email":"via@gmail.com","stores_number":"00000000000055734118","staff_id":2}	
// ];
// $scope.transactions = [
// 	{"transactions_id":1,"quantity":1,"transactions_date":"2021-11-16 03:15:04","books_id":1,"clients_id":2}
// ];


//Od baza
$scope.books=[];
$http.get("model/select.php?table_name=books")
.then(function(response) {
	$scope.books = response.data;
});

$scope.authors=[];
$http.get("model/select.php?table_name=authors")
.then(function(response) {
	$scope.authors = response.data;
});

$scope.formats=[];
$http.get("model/select.php?table_name=formats")
.then(function(response) {
	$scope.formats = response.data;
});

$scope.category=[];
$http.get("model/select.php?table_name=category")
.then(function(response) {
	$scope.category = response.data;
});

$scope.clients=[];
$http.get("model/select.php?table_name=clients")
.then(function(response) {
	$scope.clients = response.data;
});

$scope.languages=[];
$http.get("model/select.php?table_name=languages")
.then(function(response) {
	$scope.languages = response.data;
});
 
$scope.publisher=[];
$http.get("model/select.php?table_name=publisher")
.then(function(response) {
	$scope.publisher = response.data;
});

$scope.transactions=[];
$http.get("model/select.php?table_name=transactions")
.then(function(response) {
	$scope.transactions = response.data;
});

$scope.stores=[];
$http.get("model/select.php?table_name=stores")
.then(function(response) {
	$scope.stores = response.data;
});

$scope.staff=[];
$http.get("model/select.php?table_name=staff")
.then(function(response) {
	$scope.staff = response.data;
});

/***********************************************************************************************************************************************************/
/*                                                       Functions                                                                                         */
/***********************************************************************************************************************************************************/

//"addBook(books_name,pages,price,language_id,publisher_id,format_id,category_id,authors_id,stores_id,short_text,long_text,year)"
//Vo baza

function postData(fileName,objData){
	$http({
		method : "POST", 
		  url : "model/"+ fileName,
		  data:objData
	  }).then(function mySuccess(response) {
		//$scope.myWelcome = response.data;
	  }, function myError(response) {
		//$scope.myWelcome = response.statusText;
	  });
}

//"addBook(books_name,pages,price,language_id,publisher_id,format_id,category_id,authors_id,stores_id,short_text,long_text,year)"
$scope.addBook= function(books_name,pages,price,language_id,publisher_id,format_id,category_id,authors_id,stores_id,short_text,long_text,year){
	var objBook=[];
	objBook.push({
		
        "books_name":books_name,
        "pages":pages,
		"price":price,
        "language_id":language_id,
        "publisher_id":publisher_id,
        "format_id":format_id,
        "category_id":category_id,
        "authors_id":authors_id,
        "stores_id":stores_id,
        "short_text":short_text,
        "long_text":long_text,
        "year":year,

		"action":"insert"
	});

	console.log(objBook);
	//console.log(books_name+" "+pages+" "+price+" "+language_id+" "+publisher_id+" "+format_id+" "+category_id+" "+authors_id+" "+stores_id+" "+short_text+" "+long_text+" "+year);
	
	postData("model.books.php",objBook);
}

$scope.addAuthor= function(authors_first_name,authors_last_name){
	var objAuthor=[];
	objAuthor.push({
		
        "authors_first_name":authors_first_name,
        "authors_last_name":authors_last_name,
       
		"action":"insert"
	});

	//console.log(objAuthor);
	//console.log(authors_first_name+" "+authors_last_name);
	
	postData("model.authors.php",objAuthor);
}

$scope.addCategories= function(category_name){
	var objCategories=[];
	objCategories.push({
		
        "category_name":category_name,
       
		"action":"insert"
	});

	console.log(objCategories);
	//console.log(category_name);
	
	postData("model.category.php",objCategories);
}

$scope.addLanguage= function(language_name){
	var objLanguage=[];
	objLanguage.push({
		
        "language_name":language_name,
       
		"action":"insert"
	});

	//console.log(objLanguage);
	//console.log(language_name);
	
	postData("model.languages.php",objLanguage);
}

$scope.addPublishers= function(publisher_name,publisher_country){
	var objPublishers=[];
	objPublishers.push({
		
        "publisher_name":publisher_name,
		"publisher_country":publisher_country,
       
		"action":"insert"
	});

	console.log(objPublishers);
	//console.log(publisher_name+" "+publisher_country);
	
	postData("model.publisher.php",objPublishers);
}

$scope.addFormat= function(format_name){
	var objFormat=[];
	objFormat.push({
		
        "format_name":format_name,
       
		"action":"insert"
	});

	console.log(objFormat);
	//console.log(format_name);
	
	postData("model.formats.php",objFormat);
}

$scope.addEmployee= function(staff_id,staff_first_name,staff_last_name,staff_town,staff_country,staff_continent,staff_address,staff_address_number,staff_number,staff_email){
	var objEmployee=[];
	objEmployee.push({
		
        "staff_id":staff_id,
		"staff_first_name":staff_first_name,
		"staff_last_name":staff_last_name,
		"staff_town":staff_town,
		"staff_country":staff_country,
		"staff_continent":staff_continent,
		"staff_address":staff_address,
		"staff_address_number":staff_address_number,
		"staff_number":staff_number,
		"staff_email":staff_email,
       
		"action":"insert"
	});

	console.log(objEmployee);
	//console.log(staff_id,staff_first_name,staff_last_name,staff_town,staff_country,staff_continent,staff_address,staff_address_number,staff_number,staff_email);
	
	postData("model.staff.php",objEmployee);
}

$scope.addClient= function(clients_id,clients_first_name,clients_last_name,clients_town,clients_country,clients_continent,clients_address,clients_address_number,clients_number,clients_email,clients_username,clients_password){
	var objClient=[];
	objClient.push({
		
        "clients_id":clients_id,
		"clients_first_name":clients_first_name,
		"clients_last_name":clients_last_name,
		"clients_town":clients_town,
		"clients_country":clients_country,
		"clients_continent":clients_continent,
		"clients_address":clients_address,
		"clients_address_number":clients_address_number,
		"clients_number":clients_number,
		"clients_email":clients_email,
		"clients_username":clients_username,
		"clients_password":clients_password,
       
		"action":"insert"
	});

	console.log(objClient);
	//console.log(clients_id,clients_first_name,clients_last_name,clients_town,clients_country,clients_continent,clients_address,clients_address_number,clients_number,clients_email,clients_username,clients_password);

	postData("model.clients.php",objClient);
}

$scope.addStore= function(stores_id,stores_name,stores_town,stores_country,stores_continent,stores_address,stores_address_number,stores_email,stores_number,staff_id){
	var objStore=[];
	objStore.push({
		
        "stores_id":stores_id,
		"stores_name":stores_name,
		"stores_town":stores_town,
		"stores_country":stores_country,
		"stores_continent":stores_continent,
		"stores_address":stores_address,
		"stores_address_number":stores_address_number,
		"stores_email":stores_email,
		"stores_number":stores_number,
		"staff_id":staff_id,
       
		"action":"insert"
	});

	console.log(objStore);
	//console.log(stores_id,stores_name,stores_town,stores_country,stores_continent,stores_address,stores_address_number,stores_email,stores_number,staff_id);
	
	postData("model.stores.php",objStore);
}

$scope.addTransaction= function(transactions_id,quantity,books_id,clients_id){
	var objTransaction=[];
	objTransaction.push({
		
        "transactions_id":transactions_id,
		"quantity":quantity,
		//"transactions_date":transactions_date,
		"books_id":books_id,
		"clients_id":clients_id,
       
		"action":"insert"
	});

	console.log(objTransaction);
	//console.log(transactions_id,quantity,transactions_date,books_id,clients_id);
	
	postData("model.transactions.php",objTransaction);
}




//delete

$scope.deleteRow=function(table_name,pk_value){
	var objDelete=[];
	objDelete.push({
		"table_name":table_name,
		"pk_value":pk_value,
		"action":"delete"
	});
	console.log(objDelete);
	postData("model."+table_name+".php",objDelete);

//	$scope.refresh();
//	$state.reload().
//$window.location.reload();
// funkcija za auto refresh windows.reload();
}


});