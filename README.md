# Secure Hashed Authentication

[![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/akshatvg/Secure-Hashed-Authentication?logo=github&style=social)](https://github.com/akshatvg/) [![GitHub last commit](https://img.shields.io/github/last-commit/akshatvg/Secure-Hashed-Authentication?style=social&logo=git)](https://github.com/akshatvg/) [![GitHub stars](https://img.shields.io/github/stars/akshatvg/Secure-Hashed-Authentication?style=social)](https://github.com/akshatvg/Secure-Hashed-Authentication/stargazers) [![GitHub forks](https://img.shields.io/github/forks/akshatvg/Secure-Hashed-Authentication?style=social&logo=git)](https://github.com/akshatvg/Secure-Hashed-Authentication/network)

blake2b & md5 based registration and login in PHP to show a secure hashed password.

<p align="center">
<img src="https://coinguides.org/wp-content/uploads/2018/08/blake-2b.jpg" height="120px" alt="blake2b"/>
<img src="https://websalutem.com/wp-content/uploads/md5_checksum.jpg" height="120px" alt="md5"/>
</p>

![Generic badge](https://img.shields.io/badge/Secure_Hashed-Authentication-orange) 

## How it works
- The project uses both blake2b and md5 to hash the password so it can't be unencrypted or stolen or intercepted.
- We first remove backslashes to ensure no XSS Attack can take place.
- We then escape special characters in a string to ensure SQL Injection and XSS Attacks aren't possible. This doesn't affect the password's strength as the user enters the same password to login as while signing up. He/she won't even know this procedure took place.
- The password is hashed with the blake2b hashing algorithm.
- The password is then hashed with the md5 hashing algorithm.
- The same procedure is repeated for both login and registration to ensure the final hashed value is the same and hence login doesn't fail.

## Useful Links

- [deemru's blake2b implementation in PHP](https://github.com/deemru/Blake2b)

## Requirements

[![GitHub top language](https://img.shields.io/github/languages/top/akshatvg/Secure-Hashed-Authentication?logo=php&style=social)](https://github.com/akshatvg/)

The source code of this project is written in **`PHP`**. You will need to install composer to run this project.

## Instructions
1. Enter the following commands in terminal or the command prompt:
```bash
$ git clone https://github.com/akshatvg/Secure-Hashed-Authentication
$ cd Secure-Hashed-Authentication
$ composer install
```
2. Import `database.sql` into any database and then enter these details in `db.php`.
3. Register and then login.


## Need help?


Feel free to contact me via [Facebook](https://www.facebook.com/akshatvg).

Invite me to connect on [LinkedIn](https://www.linkedin.com/in/akshatvg/).

[![Facebook](https://img.shields.io/badge/Facebook-add-blue.svg?logo=facebook&logoColor=white)](https://www.facebook.com/akshatvg) [![Quora](https://img.shields.io/badge/Quora-ask-red.svg?logo=quora)](https://www.quora.com/profile/Akshat-Gupta-279) [![Instagram](https://img.shields.io/badge/Instagram-follow-purple.svg?logo=instagram&logoColor=white)](https://www.instagram.com/akshatvg/) [![Snapchat](https://img.shields.io/badge/Snapchat-add-yellow.svg?logo=snapchat&logoColor=white)](https://www.snapchat.com/add/akshatvg) [![Medium](https://img.shields.io/badge/Medium-follow-black.svg?logo=medium&logoColor=white)](https://medium.com/@akshatvg)


```bash



 _____ _                 _     __   __            
|_   _| |               | |    \ \ / /            
  | | | |__   __ _ _ __ | | __  \ V /___  _   _   
  | | | '_ \ / _` | '_ \| |/ /   \ // _ \| | | |  
  | | | | | | (_| | | | |   <    | | (_) | |_| |  
  \_/ |_| |_|\__,_|_| |_|_|\_\   \_/\___/ \__,_|  
                                                  
                                                  
______                                            
|  ___|                                           
| |_ ___  _ __                                    
|  _/ _ \| '__|                                   
| || (_) | |                                      
\_| \___/|_|                                      
                                                  
                                                  
______      _               _   _               _ 
| ___ \    (_)             | | | |             | |
| |_/ / ___ _ _ __   __ _  | |_| | ___ _ __ ___| |
| ___ \/ _ \ | '_ \ / _` | |  _  |/ _ \ '__/ _ \ |
| |_/ /  __/ | | | | (_| | | | | |  __/ | |  __/_|
\____/ \___|_|_| |_|\__, | \_| |_/\___|_|  \___(_)
                     __/ |                        
                    |___/                         

 


```

## License

**MIT &copy; [Akshat Gupta](https://github.com/akshatvg/Secure-Hashed-Authentication/blob/master/LICENSE)**

[![GitHub license](https://img.shields.io/github/license/akshatvg/Secure-Hashed-Authentication?style=social&logo=github)](https://github.com/akshatvg/Secure-Hashed-Authentication/blob/master/LICENSE) [![Twitter Follow](https://img.shields.io/twitter/follow/akshatvg?style=social)](https://twitter.com/akshatvg)

---------

```javascript

if (youEnjoyed) {
    starThisRepository();
}

```

-----------

