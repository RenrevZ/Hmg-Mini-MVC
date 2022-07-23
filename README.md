## PHP Mini MVC Framework
- A minimalistic customizable framework build for learning purposes

> # IMPORTANT NOTE!
> - This framework was build on learning pupose and not tested in a production environment
> - Auto loading of routes was not implemented, if you want to implement auto loading i suggest using [Composer](https://getcomposer.org/).
> - Basic Knowledge on [PHP OOP](https://www.w3schools.com/php/php_oop_what_is.asp/). And  [MVC Structure](https://www.w3schools.in/mvc-architecture). was needed.
> - Tailwind css was added by default if you dont want to use taiwind feel free to remove tailwind components.

### INSTALLATION
1. Download and install XAMMP
1. Download the archieve or clone this project using git
1. Paste the project on your xamp/htdocs folder
1. On the public folder of the project change the ` RewriteBase /HG-FRAME-MVC/public/` of the `.htaccess` according to the path of your localhost server.
1. Run your localhost server

> #### USING THE FRAMEWORK:
> - The Core Controller Class on the libraries folder was responsible for url routing you dont need to make changes on these
file unless you're implementing new features.
> - The Controller on the libraries folder was responsible for deciding which views or model to load. So whenever you are creating a new controllers always extend it on your controllers in the app/controllers folder.
> Example:
>>      class Pages extends Controller{ 
>>               public class index(){
>>                   $this->view('pages/index')
>>                }
>>        } 
> -  this example i have a Controller called pages so i extend the Controller on libraries folder and load the view index inside the views/pages/index.php
> 
> -  The Database Controller was the one who holds all of the command on the CRUD functionality so whenever you add a model always run this at the Constructor
>  Example:
>>      class Pages extends Controller{ 
>>                public class __construct(){
>>                   $this->Model = $this->model('form')
>>                }
>>
>>               public class index(){
>>                   $this->view('pages/index')
>>                }
>>        }
> -  this example i load the model form inside the models folder to use it as the database of Pages Controller

### That's it have fun using the framework
> This framewrok was inspired by Laravel Framework and many mvc resources online.


