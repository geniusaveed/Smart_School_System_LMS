# Smart School LMS (Learning Management System)

A comprehensive School Management System built with CodeIgniter PHP framework. This system provides a complete solution for managing all aspects of a school including student information, attendance, fees, examinations, homework, library, inventory, and much more.

## 🌟 Features

### Core Modules

- **Student Management**
  - Student admission and registration
  - Student profiles and information management
  - Student categories and classification
  - Student documents management
  - Student timeline and activity tracking

- **Teacher Management**
  - Teacher profiles and information
  - Teacher assignment to classes and subjects
  - Teacher documents management

- **Attendance Management**
  - Daily attendance tracking
  - Attendance reports
  - Absent notifications via SMS/Email

- **Fee Management**
  - Fee categories and types
  - Fee collection and tracking
  - Fee reminders
  - Online fee payment integration
  - Fee reports and receipts

- **Examination & Assessment**
  - Exam scheduling and management
  - Online examination system
  - Result management and publishing
  - Marksheet generation
  - Grade reports

- **Homework Management**
  - Homework assignment
  - Submission tracking
  - Grading and feedback

- **Online Admission**
  - Online admission form
  - Application tracking
  - Admission fee payment
  - Multiple payment gateway support

- **Library Management**
  - Book catalog management
  - Book issue and return
  - Library reports

- **Inventory Management**
  - Item management
  - Stock tracking
  - Supplier management

- **Front Office Management**
  - Visitor management
  - Complaints tracking
  - Dispatch and receive management

- **Communication**
  - SMS notifications (multiple gateway support)
  - Email notifications
  - Push notifications
  - Bulk messaging

- **Reports & Analytics**
  - Student reports
  - Fee reports
  - Attendance reports
  - Examination reports
  - Custom report generation

- **Alumni Management**
  - Alumni registration
  - Alumni events management
  - Alumni directory

- **Online Classes & Meetings**
  - Online class scheduling
  - Meeting management
  - Video conferencing integration

- **Multi-language Support**
  - Support for 80+ languages
  - Easy language switching
  - Localized interface

- **Payment Gateway Integration**
  - PayPal
  - Stripe
  - Paytm
  - Razorpay
  - Instamojo
  - Paystack
  - Flutterwave
  - Midtrans
  - And many more...

- **Additional Features**
  - Role-based access control (RBAC)
  - Custom fields support
  - Certificate generation
  - ID card generation
  - Biometric integration
  - Timetable management
  - Syllabus management
  - Study material management
  - Gallery management
  - News and announcements
  - Theme customization
  - Responsive design

## 📋 Requirements

- **PHP**: 7.2 or higher
- **Database**: MySQL 5.6+ or MariaDB 10.0+
- **Web Server**: Apache 2.4+ (with mod_rewrite enabled) or Nginx
- **PHP Extensions**:
  - mysqli
  - mbstring
  - openssl
  - curl
  - gd
  - zip
  - xml

## 🚀 Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/geniusaveed/Smart_School_System_LMS.git
cd Smart_School_System_LMS
```

### Step 2: Configure Database

1. Create a MySQL database for the application
2. Edit `application/config/database.php` and update the database credentials:
   ```php
   $db['default'] = array(
       'dsn'   => '',
       'hostname' => 'localhost',
       'username' => 'your_username',
       'password' => 'your_password',
       'database' => 'your_database_name',
       'dbdriver' => 'mysqli',
       // ... other settings
   );
   ```

### Step 3: Set Permissions

Make sure the following directories are writable:
```bash
chmod -R 755 application/cache
chmod -R 755 application/logs
chmod -R 755 uploads
```

### Step 4: Configure Base URL

Edit `application/config/config.php` and set your base URL:
```php
$config['base_url'] = 'http://your-domain.com/';
```

### Step 5: Run Installation

1. Navigate to `http://your-domain.com/install/start` in your browser
2. Follow the installation wizard
3. Complete the setup process
4. **Important**: After installation, delete the `application/controllers/install` folder for security

### Step 6: Default Login Credentials

After installation, you can log in with the admin credentials you created during the installation process.

## 📁 Project Structure

```
smart_school_lms/
├── application/          # Application code
│   ├── config/          # Configuration files
│   ├── controllers/     # Controllers
│   ├── models/          # Models
│   ├── views/           # Views
│   ├── libraries/       # Custom libraries
│   ├── helpers/         # Helper functions
│   └── language/        # Language files
├── backend/             # Frontend assets (CSS, JS, images)
├── system/              # CodeIgniter system files
├── uploads/             # Uploaded files
├── temp/                # Temporary files
├── backup/              # Backup files
└── index.php            # Entry point
```

## 🔧 Configuration

### Email Configuration

Configure email settings in the admin panel:
- Navigate to **Settings > Email Configuration**
- Enter SMTP details (server, port, username, password)
- Test email functionality

### SMS Configuration

Configure SMS gateway in the admin panel:
- Navigate to **Settings > SMS Configuration**
- Select your SMS gateway provider
- Enter API credentials
- Test SMS functionality

### Payment Gateway Configuration

Configure payment gateways in the admin panel:
- Navigate to **Settings > Payment Gateway**
- Select and configure your preferred payment gateway
- Enter API keys and credentials

## 🌐 Multi-language Support

The system supports 80+ languages. To change the language:
1. Go to **Settings > Language**
2. Select your preferred language
3. The interface will update automatically

## 🔐 Security

- **After Installation**: Delete the `application/controllers/install` folder
- **File Permissions**: Ensure proper file permissions are set
- **Database**: Use strong database passwords
- **HTTPS**: Use HTTPS in production
- **Regular Updates**: Keep the system updated

## 📱 Responsive Design

The system is fully responsive and works on:
- Desktop computers
- Tablets
- Mobile phones

## 🎨 Themes

Multiple themes are available:
- Default
- Bold Blue
- Dark Gray
- Material Pink
- Shadow White
- Yellow

You can customize themes from the admin panel.

## 📞 Support

For support and documentation, please visit the project repository or contact the development team.

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📝 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 🙏 Acknowledgments

- Built with [CodeIgniter](https://codeigniter.com/)
- Uses various open-source libraries and frameworks
- Thanks to all contributors and users

## 📊 Version

Current Version: 6.3.0

---

**Note**: This is a comprehensive school management system. Make sure to configure all settings properly before using it in a production environment.

