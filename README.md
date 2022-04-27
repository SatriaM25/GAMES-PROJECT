**SPACE RACING WEB BASED GAME**

>GOAL : Avoid the crash as long as possible!

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
> MAIN MENU
![image](https://user-images.githubusercontent.com/77273824/165442267-85015167-ce0b-469a-a2d8-c8b236918cb5.png)

