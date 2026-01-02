 Biggest Docker Challenge

*Problem:
The server refused to run or appear in the browser. The container built successfully, but visiting  http://localhost:8080  showed nothing.

*Solution:  
I solved it by:
1. Mapping ports correctly (-p 8080:80).
2. Checking logs with (docker logs news-container) to identify Apache startup errors.
3. Verifying files were copied into (/var/www/html).
4. Fixing permissions with (chown -R www-data:www-data /var/www/html).
5. Ensuring MySQL was running so PHP pages could connect.

After these steps, the server started correctly and the app appeared in the browser.

*The most important Git/GitHub lesson you learned in this assignment: 
-I learned how to use GitHub not just for version control, but also as a way to share my project with others and collaborate more easily.   
Even if I remove the project from my local computer, I can always clone it back from GitHub.
This gave me confidence that my work is safe, backed up, and accessible anywhere.  
-I learned in this assignment was how to make commits.
 This skill made it much easier for me to modify and improve my program, since I can track changes step by step and return to previous versions whenever needed