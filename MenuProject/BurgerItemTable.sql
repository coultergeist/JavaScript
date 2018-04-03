create table BurgerItem(
   BurgerItemKey   INT NOT NULL ,
   BurgerItemName VARCHAR (20) NOT NULL,
   BurgerItemDescription  nvarchar(256) NOT NULL,
   BurgerItemPrice   DECIMAL (18, 2),       
   PRIMARY KEY (BurgerItemKey)
);

INSERT INTO `BurgerItem` (
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(1,'Chicken','A domestic fowl, Gallus domesticus, descended from various jungle fowl of southeastern Asia.',3.00);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(2,'Beef','The flesh of a cow, bull, or ox.',3.00);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(3,'Bacon','Cured meat from the sides and belly of a pig, served in thin slices.',3.00);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(4,'Turkey','A large mainly domesticated game bird native to North America.',3.00);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(5,'Cheese','A food made from the pressed curds of milk.',0.15);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(6,'Lettuce','A cultivated plant of the daisy family.',0.15);
;;
insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(7,'Pickles','A small cucumber preserved in vinegar, brine, or a similar solution.',0.15);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(8,'Fried Egg','An egg cooked on both sides; the yolk is cooked through but soft and near liquid at the center.',0.15);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(9,'Guacamole','A dish of mashed avocado mixed with chopped onion, tomatoes, chili peppers.',0.15);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(10,'Fries','A strip of potato fried in deep fat.',1.00);

insert into BurgerItem(
BurgerItemKey,
BurgerItemName,
BurgerItemDescription,
BurgerItemPrice)
values(11,'Curly Fries','A curled strip of potato fried in deep fat.',1.00);
