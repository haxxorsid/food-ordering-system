# Food Ordering System

## Screenshots
### Login
![Login](https://image.prntscr.com/image/aY4ghnqETTWc8w6RRqcSOw.jpg)
### Register
![Register](https://image.prntscr.com/image/B67umVCPSae_38Gfenxlbw.jpg)
### Modify Food Menu (Admin)
![Modify Menu](https://image.prntscr.com/image/bAoF4lB7THOSZ-9zI5eXzg.jpg)
### Food Menu (Customer)
![View tickets](https://image.prntscr.com/image/dEVkeAVhRxWbxCu_uNB5ew.jpg)
### Placing Order
![Records](https://image.prntscr.com/image/QSWkwRmNSkOnL9TrrfkpJA.jpg)
### View all Orders(Admin)
![Records](https://image.prntscr.com/image/QsUxzm5nTRatVyt5PY-xNg.jpg)
### List Tickets
![View All Tickets(Admin)](https://image.prntscr.com/image/8cr_-H4wRQC3HxOVBQseFA.jpg)
### Place & View Tickets(Customer)
![Tickets(User)](https://image.prntscr.com/image/M_VIy9bRQCe9eYFsn4AWUA.jpg)
### Communicating on Support Ticket
![Support Ticket](https://image.prntscr.com/image/aR7kQo5AQpSa_Y3kU3SDcA.jpg)
### Modify Details(Customer)
![Modifying Records](https://image.prntscr.com/image/sXogBp55SMahRleBIv7Plg.jpg)
### User Management(Admin)
![Modifying Records](https://image.prntscr.com/image/St11KReLQVOXHctcmsHY-g.jpg)


How To Install -
---------

1. Create Database food.
2. Run food.sql script provided in sql folder.
3. Go to login.php and try out our application. Sample user credentials can be found in users & wallet_details table.

Note -
---------
1. This is not ready for PRODUCTION.
2. The username and password of sample users are stored in table `users`.
3. Only Customers with "Verified" status can place orders using "Cash on Delivery" option.
4. By default a new customer gets 2000 coins in Wallet on signing up, and a fake Credit card number & CVV number is generated and stored in SQL Table "wallet_details" with corresponding new customer's ID.
5. Use that Card Number & CVV while placing an order, else order won't be successful or use "Cash on delivery" option.
6. What's lacking? Dynamic payment(real payment system) and error reporting lacks in this project. And also one might wish for showing corresponding food item's photo and all that stuff.
