const nodemailer = require('nodemailer');
const dotenv = require('dotenv');
dotenv.config();

let transporter = nodemailer.createTransport({
    host: 'smtp.gmail.com',
    port: 465,
    secure: true,
    auth: {
        user: process.env.EMAIL,
        pass: process.env.PASS
    }
});


let mailOptions = {
    from: process.env.EMAIL,
    to: '211001014@rajalakshmi.edu.in',
    subject: 'Sending Email using Node.js',
    text: 'That was easy! Thanks for teaching a new concept, it was really helpful'
};

transporter.sendMail(mailOptions, function(error, info) {
    if (error) {
        console.log(error);
    } else {
        console.log('Email sent: ' + info.response);
    }
});
