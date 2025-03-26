# L I F E S P A N

# Have you ever think about your life stats like it is in video games ?

# Now we offer this chance especially for you by this project ! 

# Thanks for your CONGRATULATIONS }:) 

# Run your localhost in order to launch the project :
```bash
php localhost:< port number >
```
# Enter your birthday ( YYYY.MM.DD ) and you are guaranteed to be SHOCKED !

# Structure

lifespan/  
├── composer.json            # Composer configuration file  
├── vendor/                  # Composer dependencies  
├── Core/                    # Core classes  
│   └── Person.php           # Class for handling user data  
├── src/                     # Application source code  
│   ├── Controllers/         # Controllers for calculations  
│   │   ├── Family.php       # Controller for Family Time calculations  
│   │   ├── Work.php         # Controller for Work Time calculations  
│   │   ├── Road.php         # Controller for Road Time calculations  
│   │   └── Sleep.php        # Controller for Sleep Time calculations  
│   └── Stats.php            # Class for aggregating statistics  
├── views/                   # Views (HTML templates)  
│   ├── form.php             # Form for entering date of birth  
│   ├── results.php          # Page displaying results  
│   ├── family.php           # Template for Family Time  
│   ├── work.php             # Template for Work Time  
│   ├── road.php             # Template for Road Time  
│   ├── sleep.php            # Template for Sleep Time (under development)  
│   └── study.php            # Template for Study Time (placeholder)  
├── styles/                  # Styles  
│   └── styles.css           # Main CSS file  
├── Router/                  # Routing  
│   └── Router.php           # Routing class  
└── index.php                # Application entry point 
