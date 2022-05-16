<form action="mail.js" method="post">

    <?php
        require "PHPmail/PHPMailerAutoLoad.php";
        require "PHPmail/class.smtp.php";
        require "PHPmail/class.phpmailer.php";
    
        $mail = new PHPMailer();
        $mail -> isSMTP();

        $mail ->Host="smtp.gmail.com" ;
        $mail ->Port=587 ;
        $mail -> SMTPAuth=true;
        $mail -> SMTPSecure="tls";
        $mail ->Username="careaboutyou.cay@gmail.com" ;
        $mail -> Password="AminaAnoukImancay09";
       
        $mail->setFrom("careaboutyou.cay@gmail.com", "CARE ABOUT YOU");
        $mail->addAddress("careaboutyou.cay@gmail.com");
        $mail->addReplyTo("no-reply@careaboutyou.com"); // misschien beter zo'n fake "noreply mail maken

        $mail->isHTML(true);
        $mail->Subject="Reminder that you care";

        // hier nog wat CSS aan toevoegen
        $mail->Body="  <title></title>
  
        <style type=\"text/css\">
          @media only screen and (min-width: 570px) {
      .u-row {
        width: 550px !important;
      }
      .u-row .u-col {
        vertical-align: top;
      }
    
      .u-row .u-col-100 {
        width: 550px !important;
      }
    
    }
    
    @media (max-width: 570px) {
      .u-row-container {
        max-width: 100% !important;
        padding-left: 0px !important;
        padding-right: 0px !important;
      }
      .u-row .u-col {
        min-width: 320px !important;
        max-width: 100% !important;
        display: block !important;
      }
      .u-row {
        width: calc(100% - 40px) !important;
      }
      .u-col {
        width: 100% !important;
      }
      .u-col > div {
        margin: 0 auto;
      }
    }
    body {
      margin: 0;
      padding: 0;
    }
    
    table,
    tr,
    td {
      vertical-align: top;
      border-collapse: collapse;
    }
    
    p {
      margin: 0;
    }
    
    .ie-container table,
    .mso-container table {
      table-layout: fixed;
    }
    
    * {
      line-height: inherit;
    }
    
    a[x-apple-data-detectors='true'] {
      color: inherit !important;
      text-decoration: none !important;
    }
    
    table, td { color: #000000; } a { color: #3598db; text-decoration: underline; } </style>
      
      
    
    </head>
    
    <body class=\"clean-body u_body\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #d4b995;color: #000000\">
    
      <table style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #d4b995;width:100%\" cellpadding=\"0\" cellspacing=\"0\">
      <tbody>
      <tr style=\"vertical-align: top\">
        <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
        
    
    <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
      <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
        \<div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
    
          
    <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
      <div style=\"width: 100% !important;\">

      
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:20px 10px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
    <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
      <tr>
        <td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
          <a href=\"https://unlayer.com\" target=\"_blank\">
          <img align=\"center\" border=\"0\" src=\"images/image-1.png\" alt=\"Logo\" title=\"Logo\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 35%;max-width: 185.5px;\" width=\"185.5\"/>
          </a>
        </td>
      </tr>
    </table>
    
          </td>
        </tr>
      </tbody>
    </table>
    
      
      </div>
    </div>
        </div>
      </div>
    </div>
    
    
    
    <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
      <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #3598db;\">
        <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
          
    <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
      <div style=\"background-color: #f8cac6;width: 100% !important;\">      
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:30px 10px 0px 15px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
      <h3 style=\"margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: 'Montserrat',sans-serif; font-size: 23px;\">
        Upcoming Event Reminder
      </h3>
    
          </td>
        </tr>
      </tbody>
    </table>
    
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style= \"overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
    <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
      <tr>
        <td style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
          
          <img align=\"center\" border=\"0\" src=\"images/image-2.gif\" alt=\"Calendar\" title=\"Calendar\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 400px;\" width=\"400\"/>
          
        </td>
      </tr>
    </table>
    
          </td>
        </tr>
      </tbody>
    </table>
    
      <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
      </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
          <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    
    
    
    <div class=\"u-row-container\" style=\"padding: 0px;background-image: url(' ');background-repeat: no-repeat;background-position: center top;background-color: transparent\">
      <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #cbebd9;\">
        <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
         
    <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
      <div style=\"width: 100% !important;\">
   
      
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:3px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
      <div style=\"line-height: 140%; text-align: left; word-wrap: break-word;\">
        <p style=\"font-size: 14px; line-height: 140%; text-align: center;\"><span style=\"font-family: 'comic sans ms', sans-serif; font-size: 14px; line-height: 19.6px;\"><em><span style=\"font-size: 30px; line-height: 42px;<\"><strong>Care about you</strong></span></em></span></p>
      </div>
    
          </td>
        </tr>
      </tbody>
    </table>
    
     
      </div>
    </div>
    <!--[if (mso)|(IE)]></td><![endif]-->
          <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
    
    
    
    <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
      <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;\">
        <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
         
          
    
    <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
      <div style=\"width: 100% !important;\">
      
      
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:0px 10px 10px 15px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
      <h3 style=\"margin: 0px; color: #293c4b; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: 'Montserrat',sans-serif; font-size: 18px;\">
        <strong>Hi users_firstName users_lastName,</strong>
      </h3>
    
          </td>
        </tr>
      </tbody>
    </table>
    
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
      <div style=\"color: #656e72; line-height: 140%; text-align: left; word-wrap: break-word;\">
        <p style=\"font-size: 14px; line-height: 140%;\"><span style=\"font-size: 16px; line-height: 22.4px; font-family: Lato, sans-serif;\">We care about you,</span></p>
    <p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
    <p style=\"font-size: 14px; line-height: 140%;\"><span style=\"font-size: 16px; line-height: 22.4px; font-family: Lato, sans-serif;\">That's why we</span><span style=\"font-size: 16px; line-height: 22.4px; font-family: Lato, sans-serif;\"> friendly remind you that you have an exciting upcoming event!!</span></p>
    <p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
    <p style=\"font-size: 14px; line-height: 140%;\"><span style=\"font-size: 16px; line-height: 22.4px; font-family: Lato, sans-serif;\">The event_name of friend_firstname friend_lastname on date at location</span></p>
    <p style=\"font-size: 14px; line-height: 140%;\">&nbsp;</p>
    <p style=\"line-height: 140%; font-size: 14px;\"><span style=\"font-family: Lato, sans-serif;\"><span style=\"font-size: 16px; line-height: 22.4px;\">Visit our website (hyperlink) to check our suggest presents for friend_firstname friend_lastname</span></span></p>
      </div>
    
          </td>
        </tr>
      </tbody>
    </table>
    
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
      <div style=\"color: #293c4b; line-height: 140%; text-align: center; word-wrap: break-word;\">
        <p style=\"font-size: 14px; line-height: 140%;\"><span style=\"font-family: Montserrat, sans-serif; font-size: 16px; line-height: 22.4px; color: #7db00e;\"><strong>date of today </strong></span><span style=\"font-family: Lato, sans-serif; font-size: 16px; line-height: 22.4px;\"><br />Mechelen, Antwerp Belgium</span></p>
      </div>
    
          </td>
        </tr>
      </tbody>
    </table>
    
      
      </div>
    </div>
   
        </div>
      </div>
    </div>
    
    
    
    <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
      <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
        <div style=\"border-collapse: collapse;display: table;width: 100%;background-color: transparent;\">
          
    
    <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;\">
      <div style=\"width: 100% !important;\">
      
      
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 10px 0px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
      <div style=\"color: #ecf0f1; line-height: 140%; text-align: center; word-wrap: break-word;\">
        <p style=\"font-size: 14px; line-height: 140%;\">If you have any questions, feel free message us at support.careaboutyou@gmail.com. All right reserved.<br />Mechelen, Antwerp. Belgium</p>
      </div>
    
          </td>
        </tr>
      </tbody>
    </table>
    
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 0px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
      <table height=\"0px\" align=\"center\" border\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #5c5a5a;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
        <tbody>
          <tr style=\"vertical-align: top\">
            <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%\">
              <span>&#160;</span>
            </td>
          </tr>
        </tbody>
      </table>
    
          </td>
        </tr>
      </tbody>
    </table>
    
    <table style=\"font-family:arial,helvetica,sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
      <tbody>
        <tr>
          <td style=\"overflow-wrap:break-word;word-break:break-word;padding:0px 10px 10px;font-family:arial,helvetica,sans-serif;\" align=\"left\">
            
      <div style=\"color: #7e8c8d; line-height: 140%; text-align: center; word-wrap: break-word;\">
        <p style=\"font-size: 14px; line-height: 140%;\">&copy; 2022 Company. All Rights Reserved.</p>
      </div>
    
          </td>
        </tr>
      </tbody>
    </table>
    
      </div>
    </div>
 
        </div>
      </div>
    </div>
    
        </td>
      </tr>
      </tbody>
      </table>
    
    
    ";

    if(!$mail->send() ) {
        echo "Message not send";
    }

    else{
        echo "Message has been send";
    }
    ?>

</form>