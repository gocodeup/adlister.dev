#Ad Lister Project
Congratulations! You’ve just gotten your first web development job. Ad Lister LLC had originally hired an Elbonian subcontractor to build their Craigslist clone but the project was never finished. Now they’ve hired you and another junior developer or two (your classmates) to come in and finish the project.
You’ll need all of the topics you’ve learned so far in class including HTML, CSS, JavaScript, and PHP. You will be working on this project in teams of two to three.
##Here are the primary goals of the project:
1. Gain experience in building a well-designed, vanilla PHP site using an Model, View, Controller (MVC) paradigm. 
2. Learn how to use Git in a team environment.
3. Test your resourcefulness in solving problems.

Schematic Diagram of Model, View, Controller (MVC) paradigm:
![model view controller diagram](mvc-diagram.png)


##Project Tasks Outline
1. Clone the existing site.
2. Buildout missing **views**.
3. Design and build the database.
4. Implement the site **models**.
5. Implement add creation with image upload.
6. Implement user login.
7. Protect sensitive configuration. 
8. Implement a front **controller**.

(hint: MVC components are in bolded in the list above)

After each step, you will need to provide a demo to an instructor so they can approve the work and review your code.

##Step 1: Clone the existing site.
It looks like the Elbonians have already set up most of the files you’ll need. Start by cloning the existing repository onto your local machine. Explore the files that are already there and look at what still needs to be completed. Some items in the file tree below are existing in the cloned repository and some can be copied from previous class exercises. `//` denotes a comment. 

```￼
database/ 
	db_connect.php
	migration/
		user_migration.php
	seeder/
		user_seeder.php

models/ 
	Ad.php
	BaseModel.php **** called Model in repo
	User.php

public/ 
	index.php //marketing homepage
	css/
		main.css //site styles
	img/ 
		logo.png
	js/
		main.js //site javascript
	ads.create.php //ad creation form
	ads.edit.php //ad editing form
	ads.index.php //listing of all ads
	ads.show.php //view of individual ad
	auth.login.php //login form
	auth.logout.php //logout action
	￼users.create.php //user signup
	users.edit.php //user editing form
	users.show.php //user profile

utils/ 
	Auth.php
	Input.php 
	Logger.php
	helper_functions.php //function for file uploads

views/ 
	partials/
		header.php 
		footer.php 
		navbar.php
		
controllers/
	PageController.php 

bootstrap.php //site initialization
env.template.php //sensitive site configuration env template

README.md //exercise instructions
wireframes.pdf //exercise instructions, template for views
mvc-diagram.png //exercise instructions

```
consider other files not listed above (e.g. README.md) as instructional files 
##Step 2: Buildout missing views.
1. Next, build an HTML template for your site according to the wireframes provided. Once complete, break down the template into a header, footer, navbar, etc and populate the PHP files in the views/partials directory accordingly.
2. Begin adding content to the `public/index.php` file and include your partial views to make your PHP site look like your HTML mockup. Make sure to put any site resources (JS, images, and CSS) in the appropriate locations.
3. Continue building out your site with HTML so that all of the PHP files shown in the public directory in the project tree above have content.
4. Add links between the php files in public directory so that you can navigate from page to page. At this point, hard-code sample data. For example, in the ads.index.php file, you should have a listing of 3-5 hard-coded sample ads. 
￼￼￼￼
When you think you have completed all the above tasks, please call over an instructor and give them a demonstration before continuing.

##Step 3: Design and build the database
Good news! The Elbonians built a database migration for your users table. Think about how you’ll map out the rest of the database. You will need an ads table. How will the ads and users tables relate?
Sketch out a UML-style map of the database, tables, and models before you begin coding.
Ultimately, the resulting code returned from your model will look something like this:

￼```
$ads = [ [
'image_url' => '/img/uploads/100.png' ],
// ...
];
'id' => 100,
'user_id' => 100,
'name' => 'SNES',
'description' => 'Plays like new! Includes mario kart.', 'price' => 150.00,
```
(hint: key/value pairs in the above model relate to table columns).

Create the database tables with migration files. Remember to first drop existing tables before table creation. Seed your tables with seeder files using SQL statements and PDO::exec(). Your seeders should truncate the applicable tables before using prepared statements to insert data. Create sample data to test all the relations in your application.

##Step 4: Implement site models.
Now that we have some data in the database, it is time to make that accessible via PHP. To do so, we will use the BaseModel class provided.
While the Elbonians left you a model for the Users, you will need at least one more for the Ad. (hint: see previous step for a sample of date returned from the ads model). Your Ad model will be a class that inherits from the BaseModel that provides much of the reusable functionality.
When complete, test the models by using the PHP interactive shell or by writing a small test PHP file.

##Step 5: Implement Ad creation w/ image upload.
So far, we have a site that appears to work. We can browse ads and look at individual ads and users. Now, it is time to allow users to create ads so we will have more than just our seeded data.
The Elbonians started to build the backend of an image uploader in the helper_functions.php file under the utils directory. Take a look and see if you can figure out how to use it. You might find the documentation on the `$_FILES` superglobal useful.
￼
##Step 6: Implement User Login.
Now that we have introduced editing features, we really need to have a login system to make sure that users only have access to what they should. Here is what we need:

1. Only authenticated users can create ads.
2. Ads can only be edited by the user that created them.
You should be able to use your Auth helper class created in previous exercises along with the provided User model to help with these tasks.

##Step 7: Protect sensitive site configuration. 
You may have noticed that some of our code contains sensitive information like usernames and passwords. If we check this code into a public repository on GitHub, the entire world can see our information! 

In this step, we’ll move sensitive information to an env file to prevent this exposure. In the root directory, you may have noticed a `.gitignore` file that tells git to ignore a file titled ".env.php” (hint: the `.gitignore` file is hidden so you will need to use the flag `-la` in the command line to see it). Use the `.env.template.php` to create an `.env.php` file (note the leading period). 

The env file returns an array with our sensitive information. Create code that uses a PHP include statement to read our env file and return the contents to a global variable called `$_ENV`.
Place this code so the `$_ENV` global variable is defined for all the site views. The bootstrap.php file in the adlister root folder is an ideal location. The bootstrap.php file must be required in all other PHP files on the site. 
You can add other important initialization code in bootstrap.php. For example, if you want to make logging available across the application, initialize the site logger in bootstrap.php.

Once the env and bootstrap files are setup, you can access sensitive information by calling the global variable with the approriate array key. For example, the following code displays your database name:
`echo $_ENV['DB_NAME'];`. Replace all the sensitive configuration in your code with keyed references to the values in your `$_ENV` array. 

##Step 8: Implement a Front Controller.
On the web, you will rarely see URLs like http://adlister.dev/ads.index.php. Instead, you are more likely to see URLs like http://adlister.dev/ads. These pretty-URLs look much nicer. We can implement these in our project using a Front Controller.
The Front Controller will be our index.php file. It will look at each request that comes in, and based on the path, it will require or include other PHP files. Here is an example:

```
￼￼￼￼￼￼￼￼￼￼<?php
switch ($_SERVER['REQUEST_URI']) { case '/ads':
include 'ads/index.php';
break;
case '/ads/show':
include 'ads/show.php';
￼}
break; 
default:
include 'home.php'; 
break;
```

In the simple example above, you can get the basic idea of what is going on. We use the superglobal `$_SERVER` array to determine what the request path is. We then conditionally load one of our other PHP files based on that value.
At this point, it would be a good thing to refactor your file structure so
that ads.index.php in the public directory becomes ads/index.php within the views directory. Follow this same pattern for all the other files as well.
##Where to go from here...
So many places! If you have time, try one of the following (or invent your own!): 

1. Allow a user to edit their profile, update their password, etc.
2. Allow users to delete ads that they have created.
3. Implement a user dashboard view where they will have quick access to all their ads.
4. Use composer to pull in a third party libraries for things like email (SwiftMailer),
generating fake data (Faker), or any other feature you may want.
5. Send emails on important events like user signup.
6. Allow users to mark their "favorite" ads and make these show up on the dashboard.
7. Implement a "flagging" feature where users can mark ads as inappropriate.
8. Implement an admin user that can moderate ads and remove them.
9. Implement a user feedback system.
10. Implement a forgot-password feature.
11. Once nice feature for a user of the Ad Lister app would be to create some ads in a CSV and then do a bulk upload. Implement this feature, but don't worry about the image upload.
12. Be creative, and most of all have fun!
￼￼￼