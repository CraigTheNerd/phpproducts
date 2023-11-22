## About PHP Products

PHP Products is a code assessment I was asked to complete.

This MVC Core branch implements a MVC approach to the project to offer an extensible approach to the code.

Application Demo - https://phpproducts.dicitil.co.za/

##  The PHP Logic

I was asked to implement an interface, which I've now done.
I added a ProductInterface class which has one(1) method called getProducts()

I then added a ProductIndex class which implements the ProductInterface.

I added a product Model to the codebase.
In the MVC Design Pattern, the models interact with the database and then hand the data to the controllers.

I've spoofed some database behaviour and handed the data, which right now is just two(2) products, to the product model.

The product controller then hands the data off to the view.

## The Front End

I've added a new link to a /products page, which shows the raw data
I will next implement the "dynamic" data from the "database" / model to the frontend via the controller and then to the view.


##  Application Structure

The structure of the application now follows the MVC design pattern

##  Refactors

Code refactors to look at

- Dynamic product data to the frontend
- Write a database class and build a database to handle product data properly 