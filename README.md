<h4 align="center">
    <br><br>
    <p align="center">
      <a href="#-about">About</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-technologies">Technologies</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-how-to-run-the-project">Run</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-info">Info</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-changelog">Changelog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
      <a href="#-license">License</a>
  </p>
</h4>

## 🔖 About
To demonstrate a secure API with secure CodeIgniter, I've built an API that will be used in a fictional way to manage the customer database for a company. This database contains the following data about each customer:

- [X] Name
- [X] Email
- [X] Amount paid to retain the company’s services (Retainer fee)

### The built API has the following features:
* Register a new user
* Authenticate an existing user
* Add a new client
* Edit the details of an existing client
* View all clients
* View a single client by ID
* Delete a single client by ID

## 🚀 Technologies

- [PHP](https://php.net/)
- [CodeIgniter](https://codeigniter.com/)
- [JWT](https://jwt.io/)

## 🏁 How to run the project

#### Clone the repository

```bash
git clone https://github.com/rafinhaa/ci4-api-secure.git
cd ci4-api-secure
```

#### Install dependencies

```bash
composer install
```

#### Create and edit env file

```bash
cp env .env
vi .env
```

#### Set permissions to writable folder

```bash
chmod -R 777 writable
```

#### Execute migrations

```bash
php spark migrate
```

#### Execute seeders

```bash
php spark db:seed ClientSeeder
```

## ℹ️ Info

#### Api usage
##### Register. POST multipart with name, email, password.
http://localhost:8080/auth/register

##### Login. POST multipart with email, password.
http://localhost:8080/auth/register

##### Send the Bearer token with the request

##### Create new client. POST multipart with email and retainer_fee.
http://localhost:8080/client

##### Get all clients. Method GET.
http://localhost:8080/client

##### Get client by id. Method GET.
http://localhost:8080/client/1

##### Update client. POST multipart with name and retainer_fee.
http://localhost:8080/client/1

##### Delete client. Method DELETE
http://localhost:8080/client/1



#### JWT Secret Key

Create your own JWT secret key and place it in the .env file in the JWT_SECRET_KEY variable

## 📄 Changelog

[See here](docs/changelog.md)

## 📝 License

[MIT](LICENSE)

**Free Software, Hell Yeah!**