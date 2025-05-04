# NextBase Web Application

**NextBase** is a dynamic web portal designed for student-athletes to register, create professional sports profiles, manage their schedules, and connect with coaches and recruiters. This full-stack application integrates a frontend user interface with backend PHP scripts and MySQL database interactions.

## 🌐 Live Demo

- 🌍 Website: [http://nextbase.club](https://nextbase.club)
- 📂 File Manager: [GoDaddy File Manager (Login Required)](https://p3plzcpnl508782.prod.phx3.secureserver.net:2083/cpsess4403780188/frontend/jupiter/filemanager/index.html?login=1&post_login=90167616032438)
- 💾 Database: [phpMyAdmin for playerdatabase](https://p3plzcpnl508782.prod.phx3.secureserver.net:2083/cpsess4403780188/3rdparty/phpMyAdmin/index.php?route=/database/structure&db=playerdatabase)

> 🔐 Note: Access to File Manager and phpMyAdmin requires proper GoDaddy credentials.

## 📁 Project Structure

Notable files and modules:

- `login.php` / `register.php` – User authentication
- `form_to_profile.html` – Profile data collection form
- `submit_profile.php` – Backend script to save profile to MySQL
- `load_profile.php` – Profile loader for dynamic user display
- `player-profile-page.html` – Frontend display for athlete profiles
- `my_schedule.html` / `schedule.html` – Player scheduling interface
- `player_directory.html` – Directory of all registered athletes

## 🗃️ Database

Database: `playerdatabase`  
Tables are accessible via phpMyAdmin and include data on:

- User login credentials
- Player profile details
- Availability and mentorship schedule

![Screenshot 2025-05-04 at 3 43 39 AM](https://github.com/user-attachments/assets/ecba9116-83f5-449f-b9a0-2d4ace469afd)

## 🛠 Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript, 
- **Backend**: PHP
- **Database**: MySQL (via phpMyAdmin)
- **Hosting**: GoDaddy cPanel
- Web Servers: Apache, Nginx
- Version Control: GitHub
- HTTPS/SSL – Secures communication
- JWT/OAuth – Authentication & Authorization
- APIs & Web Services: RESTful APIs,JSON, XML for data exchange

## 🚀 Features

- Secure login/registration
- Profile creation and editing
- Schedule management
- Player directory for recruiters
- External links to recruitment platforms (NCSA, Hudl, CaptainU)

## 🧭 Setup Instructions (Local Development)

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/NextBase.git
   cd NextBase
   '''''''
2. Use a local development server (e.g., MAMP, XAMPP, or Live Server extension for VS Code) to host the files.
3. (Optional) Integrate with a backend using PHP and connect to a MySQL database for storing player profiles and login credentials.

## 📷 Screenshots

Include relevant screenshots here (e.g., homepage, player profile form, schedule page).

## 📄 License
Creative Commons Attribution-NonCommercial 4.0 International License

You are free to:
- Share — copy and redistribute the material in any medium or format
- Adapt — remix, transform, and build upon the material

Under the following terms:
- Attribution — You must give appropriate credit, provide a link to the license, and indicate if changes were made.
- NonCommercial — You may not use the material for commercial purposes.

License details: https://creativecommons.org/licenses/by-nc/4.0/

GNU GENERAL PUBLIC LICENSE
Version 3, 29 June 2007

Copyright (C) [2025] [NextBase]

This program is free software: you can redistribute it and/or modify it 
under the terms of the GNU General Public License as published by the 
Free Software Foundation, either version 3 of the License, or (at your option) 
any later version.

This program is distributed in the hope that it will be useful, but WITHOUT 
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS 
FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with 
this program. If not, see <https://www.gnu.org/licenses/>.

MIT License

Copyright (c) [2025] [NexBase]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights 
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell 
copies of the Software, and to permit persons to whom the Software is 
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in 
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER 
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN 
THE SOFTWARE.



This project is for academic and non-commercial use only.
