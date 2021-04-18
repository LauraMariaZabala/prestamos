<?php
const SERVER="localhost";   //servidor
const DB="prestamos";       //Nombre de la base de datos
const USER ="root";         //nombre del usuario de la db
const PASS ="";             //contraseña de la db


//extensión PDO para la conexión a la db
//se crea una constante llamada sistema de gestion de base de datos 

const SGDB="mysql:host=".SERVER.";dbname=".DB;


//configuración para encriptación de contraseñas

const METHOD="AES-256-CBC";

//llave secreta
const SECRET_KEY='$prestamos@2021';
//identificador unico
const SECRET_IV='0970';
