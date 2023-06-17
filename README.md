# greentulsainitiative
Green Tulsa Initiative. Website created as senior capstone project


How to Implement the Code
So you have the file but want to know how to implement the code. So first you will want to start with any of your favorite web hosting websites or any software that you may have that can run HTML, PHP, and CSS. Once you determine what source you will use to run the code you will begin by uploading the documents within the gti folder. The following files create the initial framework:

- Style.css
o This is the stylesheet for the website, all styling is handled here.

- Index.php
o This is the homepage of the website. You will also need to add initiatives.php as it is linked from this page.

- Events.php
o This is the first link on the navbar, we will talk more about this later.

- Maps.php
o This is the second link on the navbar. It contains an interactive map

- Organizations.php
o This is located under the third link on the navbar. We will talk more about this later.

- Members.php
o This is the second option located under the third link on the navbar. We will talk more about this later.

- About.php
o This is the fourth link on the navbar. This contains information about the website and why it was built.
- You then have four links listed under the firth link on the navbar, they are:
o Profile.php
▪ This contains account information
o Login.php
▪ Login portal
o Register.html
▪ Portal to register for login
o Logout.php
▪ Logs you out of the website

So with these you build what is the initial framework, however, to make some of these initial links function you will need to create five sql tables in order for the tables to populate. The sql tables are as follows with table names in the first row and columns in the second:
- Initiatives
o id (auto increment), title, description, start, end

- accounts
o id(auto increment), username, password, confirm_password(null), email, activation_code, rank, mrank

- events
o eventid, Events, Description, Date, Website

- org
o org, url, city, state, email, socialmedia, FK1

- mem
o id, FK2, member, contact
So with those created we can move into the second flow of pages that will need to be added. We will first focus on the account-based pages to ensure users can login and properly use the page. To do that we will need the following files:

- authenticate.php
o this is the php script that is used when a user is logging in to make sure all information is valid and correct, if incorrect it redirects to the login page.

- Access.php
o This is a file that will be needed later down the line but is best to implement while you are already handling users. This file restricts pages based on the current users current mrank from the sql table accounts.

- Denied.php
o This is another file that is needed in the next step. This file reroutes users back to their previous page if they do not have the correct permissions.

- Config.php
o This file will handle the connection to the sql table. For this to work properly you will need to change the four variables $servername, $username, $password, and $dbname to match that of your database.

- Dbcon.php
o This is the same as config.php except it is used differently, same variables will need to be changed to yours.

- Register.php
o This handles the code portion of the register process which makes sure that usernames are different, passwords match, and send an authentication email out.

- Authenticate.php
o This file runs the information once a user clicks the link in their email.

Ok, so now you have the navbar set up, sql tables set up, and user handling all set up. Now we can move onto the framework for the tables that are located in initiatives, events, organizations, and members. Below I will list the files needed for each and then I will explain what each file does.

- Code.php
o This is the most important file here. Without this file, none of the the other forms or buttons will work appropriately as all of that code is ran via this php document.

- Message.php
o This is used for error messages within the code.php as well as success echos and the pages below.

- For the Events page:
o Event_admin.php
o Event_edit.php
o Event_create.php

- For the initiative page:
o Initiative_admin.php
o Initiative_edit.php
o Initiative_create.php
o Initiative_view.php

- For the members page:
o Mem_admin.php
o Mem_edit.php
o Mem_create.php

- For the organization page:
o Org_admin.php
o Org_edit.php
o Org_create.php

- Explanation of each type:
o _admin.php
▪ This page is restricted to only users assigned the admin role. All other users will be redirected away from this page. In this page you are able to edit or delete any information in the table.

o _edit.php
▪ This page is the page you are routed to after you click the edit button in the admin menu.

o _create.php
▪ This page is available for any user and is responsible for adding information to the tables.
o _view.php
▪ As you can see, this is only under the initiative table. This allows a user to see a single initiative at a time on a single page.
