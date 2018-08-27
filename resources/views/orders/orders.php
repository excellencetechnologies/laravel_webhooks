<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<head>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Oscar - Admin Template</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet">
</head>
<body style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f8f8f8; margin: 0;">

    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f4f8fb; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 15px;" bgcolor="#f8f8f8">

        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="width:600; background-color: #ffffff; color: #514d6a; padding: 40px; margin-top: 40px; line-height: 28px;" bgcolor="#ffffff">
                    <tr>
                        <td style="text-align: center; vertical-align: top;">
                            <img src="https://globalhappiness.org/wp-content/uploads/2017/03/shopify-logo.png" alt="Shopify Logo" style="border:none; display:inline-block;" height="80" width="170">
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center; padding-top: 60px; font-weight: 300; line-height: 48px; font-size: 42px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; color: #111; letter-spacing: -1px;">
                            Thanks for the purchase
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center; padding-top: 20px; font-weight: 300; line-height: 36px; font-size: 24px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; color: #999; letter-spacing: -1px;">
                            Your order has been placed successfully. Below are the details of your purchase.
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center; padding-top: 20px; vertical-align: top;">
                            <img src="http://oscar.dharansh.in/default/assets/demo/icon-receipt.png" alt="" style="border:none; display:inline-block;" height="128" width="128">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 700; padding-bottom: 10px;">Invoice #<?php echo $data['id']; ?></td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right; font-weight: 700; padding-bottom: 10px;"><?php echo date('d-m-Y'); ?></td>
                                    </tr>

                                    <?php for($i = 0; $i < count($data['line_items']); $i++) { ?>

                                        <tr>
                                            <td style="text-align: left; padding: 10px 10px 10px 0px; border-top: 2px solid #eee;">
                                                <?php echo $data['line_items'][$i]['title']; ?>
                                            </td>
                                            <td style="width: 10%; text-align: center; padding: 10px 10px; border-top: 2px solid #eee;">
                                                <?php echo $data['line_items'][$i]['quantity']; ?>
                                            </td>
                                            <td style="width: 20%; text-align: right; padding: 10px 0px 10px 10px; white-space: nowrap; border-top: 2px solid #eee;">
                                                <?php echo 'Rs. ' . $data['line_items'][$i]['price']; ?>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                    <tr style="color: #a09bb9;">
                                        <td style="padding: 10px 10px 10px 0px; border-top: 2px solid #eee;">
                                            Discount
                                        </td>
                                        <td style="text-align: center; padding: 10px 10px; border-top: 2px solid #eee;">
                                            &nbsp;
                                        </td>
                                        <td style="text-align: right; padding: 10px 0px 10px 10px; white-space: nowrap; border-top: 2px solid #eee;">
                                            <?php echo 'Rs. ' . $data['total_discounts']; ?>
                                        </td>
                                    </tr>

                                    <tr style="color: #a09bb9;">
                                        <td style="padding: 10px 10px 10px 0px;">
                                            Subtotal
                                        </td>
                                        <td style="text-align: center; padding: 10px 10px;">
                                            &nbsp;
                                        </td>
                                        <td style="text-align: right; padding: 10px 0px 10px 10px; white-space: nowrap;">
                                            <?php echo 'Rs. ' . $data['subtotal_price']; ?>
                                        </td>
                                    </tr>

                                    <tr style="color: #a09bb9;">
                                        <td style="padding: 0px 10px 10px 0px;">
                                            Tax
                                        </td>
                                        <td style="text-align: center; padding: 0px 10px;">
                                            &nbsp;
                                        </td>
                                        <td style="text-align: right; padding: 0px 0px 10px 10px; white-space: nowrap;">
                                            <?php echo 'Rs. ' . $data['total_tax']; ?>
                                        </td>
                                    </tr>

                                    <tr style="color: #a09bb9;">
                                        <td style="padding: 0px 10px 10px 0px;">
                                            Shipping
                                        </td>
                                        <td style="text-align: center; padding: 0px 10px;">
                                            &nbsp;
                                        </td>
                                        <td style="text-align: right; padding: 0px 0px 10px 10px; white-space: nowrap;">
                                            <?php echo 'Rs. ' . $data['shipping_lines'][0]['price']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="padding: 10px 10px 10px 0px; border-top: 3px solid #eee;">
                                            <span style="font-size: 18px; font-weight: bold">Total</span>
                                        </td>
                                        <td style="text-align: center; padding: 10px 10px; border-top: 3px solid #eee;">
                                            &nbsp;
                                        </td>
                                        <td style="text-align: right; padding: 10px 0px 10px 10px; white-space: nowrap; border-top: 3px solid #eee;">
                                            <span style="font-size: 18px; font-weight: bold">
                                                <?php echo 'Rs. ' . $data['total_price']; ?>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-top: 40px">
                            <tbody>
                            <tr>
                                <th style="text-align: left; padding-bottom: 10px; border-bottom: 1px solid #eee;">Shipping Address</th>
                                <th style="text-align: left; padding-bottom: 10px; border-bottom: 1px solid #eee;">Billing Address</th>
                            </tr>

                            <tr>
                                <td style="padding-top: 10px;">
                                    <?php echo $data['shipping_address']['name']; ?>    
                                    <br>
                                    <?php echo $data['shipping_address']['address1']; ?>    
                                    <br>
                                    <?php echo $data['shipping_address']['city']; ?>    
                                    <br>
                                    <?php echo $data['shipping_address']['zip']; ?>  
                                    <br>
                                    <?php echo $data['shipping_address']['country']; ?>  
                                </td>

                                <td style="padding-top: 10px;">
                                    <?php echo $data['billing_address']['name']; ?>    
                                    <br>
                                    <?php echo $data['billing_address']['address1']; ?>    
                                    <br>
                                    <?php echo $data['billing_address']['city']; ?>    
                                    <br>
                                    <?php echo $data['billing_address']['zip']; ?>  
                                    <br>
                                    <?php echo $data['billing_address']['country']; ?>  
                                </td>
                            </tr>

                            </tbody>
                        </table>

                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center; padding-top: 30px; padding-bottom: 60px;">
                            <a href="javascript: void(0);" style="letter-spacing: -1px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; text-decoration: none; display: block; padding: 20px; border-radius: 3px; font-size: 24px; color: #fff; background-color: #27cbcc;" target="_blank">
                                Back to shop
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center; padding-top: 30px; border-top: 1px solid #ddd;">
                        <a href="javascript: void(0);" target="_blank" style="text-decoration: none; margin-right: 20px;">
                            <img src="http://oscar.dharansh.in/default/assets/demo/icon-twitter.png" alt="" style="border:none; display:inline-block;" height="16" width="16">
                        </a>

                        <a href="javascript: void(0);" target="_blank" style="text-decoration: none; margin-right: 20px;">
                            <img src="http://oscar.dharansh.in/default/assets/demo/icon-facebook.png" alt="" style="border:none; display:inline-block;" height="16" width="16">
                        </a>

                        <a href="javascript: void(0);" target="_blank" style="text-decoration: none;">
                            <img src="http://oscar.dharansh.in/default/assets/demo/icon-dribbble.png" alt="" style="border:none; display:inline-block;" height="16" width="16">
                        </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border:none; width:600; margin-top: 20px; margin-bottom: 40px; text-align: center; color: #85868a;">
                    <tr>
                        <td style="padding-top: 20px;">
                            Copyright &copy; <?php echo date('Y'); ?> <?php echo $shop_data['shop']['name']; ?>. All Rights Reserved. We appreciate you!
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top: 10px; font-weight: 800; font-size: 12px; text-transform: uppercase; font-family: 'Open Sans',Helvetica,Arial,sans-serif;">
                            <a href="javascript: void(0);" target="_blank" style="color: #222; text-decoration: none;">Help Center</a> <span style="color: #222; font-size: 24px; margin-left: 20px; margin-right: 20px;">&#8901;</span>
                            <a href="javascript: void(0);" target="_blank" style="color: #222; text-decoration: none;">1(800)234-56-78</a> <span style="color: #222; font-size: 24px; margin-left: 20px; margin-right: 20px;">&#8901;</span>
                            <a href="javascript: void(0);" target="_blank" style="color: #222; text-decoration: none;">Unsubscribe</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>
</html>
