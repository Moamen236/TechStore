INSERT into cats(name)
values ('Laptops') , ('PCs') , ('Mobiles');

insert into products(`name` , `desc` , price , pieces_no , img , cat_id )
values ('lenovo idepad' , 'this is dummy description for product' , 15000 , 10 , '1.jpg' , 1),
('dell laptop' , 'this is dummy description for product' , 10000 , 10 , '2.jpg' , 1),
('hp idepad' , 'this is dummy description for product' , 8000 , 8 , '3.jpg' , 1),
('lenovo thinkpad' , 'this is dummy description for product' , 13000 , 5 , '4.jpg' , 1),
('pc 123' , 'this is dummy description for product' , 5000 , 3 , '5.jpg' , 2),
('pc 456' , 'this is dummy description for product' , 6000 , 4 , '6.jpg' , 2),
('pc 789' , 'this is dummy description for product' , 7000 , 2 , '7.jpg' , 2),
('samsung' , 'this is dummy description for product' , 5000 , 100 , '8.jpg' , 3),
('oppo' , 'this is dummy description for product' , 5500 , 50 , '9.jpg' , 3),
('hwawei' , 'this is dummy description for product' , 52000 , 30 , '10.jpg' , 3);

insert into admins(`name` , email , `password`)
values ('Moamen Ali' , 'moamen@gmail.com' , '$2y$10$LJfGXWO16Ak9v1Gw2y80tuQ4EdqZQAKTIka2036bX/vUb3FN/YOzO');
