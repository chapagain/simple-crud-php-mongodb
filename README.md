PHP &amp; MongoDB: Very Simple Add, Edit, Delete, View (CRUD)
========

A simple and basic CRUD application (Create, Read, Update, Delete) using PHP & MongoDB database.

**Blog:** [PHP & MongoDB: Very Simple Add, Edit, Delete, View (CRUD)](http://blog.chapagain.com.np/php-mongodb-very-simple-add-edit-delete-view-crud-beginner-tutorial/)

**Start MongoDB server**

```
sudo service mongod start
```

**Check MongoDB server status**

```
sudo service mongod status
```

**Go to MongoDB shell**

```
mongod
```

**Show databases**

```
show dbs
```

**Create database named "test"**

```
use test
```

**Create collection(table) named "users"**

```
> db.users.insert({name:"Mukesh Chapagain", age:88, email:"mukesh@example.com"})
> db.users.insert({name:"Raju Sharma", age:77, email:"raju@example.com"})
> db.users.insert({name:"Krishna Yadav", age:65, email:"krishna@example.com"})
```

**Query collection**

```
> db.users.find().pretty()
{
	"_id" : ObjectId("5946517675f3fc671900a6c1"),
	"name" : "Mukesh Chapagain",
	"age" : 88,
	"email" : "mukesh@example.com"
}
{
	"_id" : ObjectId("5946517f75f3fc671900a6c2"),
	"name" : "Raju Sharma",
	"age" : 77,
	"email" : "raju@example.com"
}
{
	"_id" : ObjectId("5946518375f3fc671900a6c3"),
	"name" : "Krishna Yadav",
	"age" : 65,
	"email" : "krishna@example.com"
}
```
