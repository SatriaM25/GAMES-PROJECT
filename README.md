**SPACE RACING WEB-BASED GAME**

>GOAL : Avoid the crash as long as possible!

>**GAMEPLAY**

https://user-images.githubusercontent.com/77273824/165501242-c4bb1322-2303-4e9e-91e0-89feb5393964.mp4

- STEP-BY-STEP TO RUN THE PROJECT ON YOUR WEB HOSTING:
1. Zip all the files from our github page and download it
2. Open the file manager of your hosting
3. Upload the zip file to your hosting file manager and extract it
4. Create a database in your web hosting
5. Go to PhpMyAdmin
6. Inside your database, create a table named **mbs_mid** (or you may change it to whatever you want, but you need to rename all sql requests in the php code later)
7. In mbs_mid table, create a structure like this:

![image](https://user-images.githubusercontent.com/77273824/165442379-52d2ec3d-27ac-4554-8d43-dfa6986f1ec5.png)

8. Go back to your hosting file manager, open **main.php** file. Find this line of code:

![image](https://user-images.githubusercontent.com/77273824/165442743-acb6d934-b16e-4470-91ff-01e2db67b442.png)

Change it to your own database setup with the format : mysqli_connect("your_host", "your_username", "your_password", "your_database_name")

9. Save and Close the main.php file
10. Run **loggin.html** file, which is our landing page
11. Basically everything is done. Now, all you need to do is register an account, then login and play

- INTERFACES & FEATURES :
> LOGIN MENU
![image](https://user-images.githubusercontent.com/77273824/165448119-5e7259c1-0552-4a2a-8e90-199f88064f8a.png)
> REGISTER MENU
![image](https://user-images.githubusercontent.com/77273824/165448224-03d76726-d41d-45f8-9445-746d83cb6326.png)
> MAIN MENU
![image](https://user-images.githubusercontent.com/77273824/165493760-1bdacf14-1a15-44ad-9446-62ad8d77a8a4.png)
> MAP
- Note : The map will point automatically based on your country when you register

![image](https://user-images.githubusercontent.com/77273824/165493860-db0a6b24-14dc-4d0e-b69e-891c509ad9b5.png)

> MATRIX PAGE
![image](https://user-images.githubusercontent.com/77273824/165494163-8edd0a03-03dd-46a7-bf9f-83e3c3678814.png)

