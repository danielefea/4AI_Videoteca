<?php 
    //Indico al server che può rispondere a chiunque 
    header("Access-Control-Allow-Origin: *");

      $objFilm = '[
        {
            "codFilm":1,
            "titolo": "Joker",
            "regista": " REG: Todd Phillips",
            "annoUscita": "A.U. 2019",
            "attori": "attori:  Joaquin Phoenix",
            "genere": "Drammatico"
        },
    
        {
            "codFilm":2,
            "titolo": "Twilight",
            "regista": "REG: Catherine Hardwicke",
            "annoUscita": "A.U. 2008",
            "attori": "attori: Robert Pattison ,Kristen Stewart",
            "genere": "Fantasy"
        },
    
        {
            "codFilm":3,
            "titolo": "Dune",
            "regista": "REG: Denis Villeneuve.",
            "annoUscita": "A.U. 2021",
            "attori": "attori: Timothée Chalamet, Zendaya",
            "genere": "Fantascientifico"
        },
    
        {
            "codFilm":4,
            "titolo": "Interstellar ",
            "regista": "REG: Christopher Nolan",
            "annoUscita": "A.U. 2014",
            "attori": "attori: Matthew McConaughey",
            "genere": "Fantascientifico"
        },
    
        {
            "codFilm":5,
            "titolo": "Una notte da leoni",
            "regista": "REG: Todd Phillips",
            "annoUscita": "A.U. 2009",
            "attori": "attori: Bradley Cooper",
            "genere": "Commedia"
        },
    
        {
            "codFilm":6,
            "titolo": "Il cavaliere oscuro",
            "regista": "REG: Christopher Nolan",
            "annoUscita": "A.U. 2008",
            "attori": "attori: Christian Bale",
            "genere": "Azione"
        },
    
        {
            "codFilm":7,
            "titolo": "Perfetti Sconosciuti",
            "regista": "REG: Paolo Genovese",
            "annoUscita": "A.U. 2016",
            "attori": "attori: Marco Giallini",
            "genere": "Commedia"
        },
    
        {
            "codFilm":8,
            "titolo": "L uomo di acciaio",
            "regista": "REG: Zack Snyder",
            "annoUscita": "A.U. 2013",
            "attori": "attori: Henry Cavill",
            "genere": "Azione"
        },
    
        {
            "codFilm":9,
            "titolo": "La vita è bella",
            "regista": "REG: Roberto Benigni.",
            "annoUscita": "A.U. 1997",
            "attori": "attori: Roberto Benigni.",
            "genere": "Drammatico"
        },
    
        {
            "codFilm":10,
            "titolo": "Biancaneve ",
            "regista": "REG: Tarsem Singh",
            "annoUscita": "A.U. 2012",
            "attori": " attori: Lily Collins, Julia Roberts, Armie Hammer",
            "genere": "Fantasy"
        },
    
        {
            "codFilm":11,
            "titolo": "Thor",
            "regista": "REG: Kenneth Branagh",
            "annoUscita": "A.U. 2011",
            "attori": " attori: Chris Hemsworth ",
            "genere": "Avventura"
        },
    
        {
            "codFilm":12,
            "titolo": "spider-man homecoming",
            "regista": "REG: Jon Watts",
            "annoUscita": "A.U. 2017",
            "attori": " attori: Tom Holland , Zendaya",
            "genere": "Film di supereroi"
        },
    
        {
            "codFilm":13,
            "titolo": "Cenerentola",
            "regista": "REG: Kenneth Branagh",
            "annoUscita": "A.U. 2015",
            "attori": "attori: Lily James",
            "genere": "Fantasy"
        },
    
        {
            "codFilm":14,
            "titolo": "Iron Man",
            "regista": "REG: Jon Favreau",
            "annoUscita": "A.U. 2008",
            "attori": "attori:  Robert Downey Jr.",
            "genere": "Film di supereroi"
        },
    
        {
            "codFilm":15,
            "titolo": "Hulk",
            "regista": "REG: Ang Lee ",
            "annoUscita": "A.U. 2003",
            "attori": " attori: Eric Bana, Jennifer Connelly, Sam Elliott, Josh Lucas, Nick Nolte",
            "genere": "Azione"
        }
    ]';

    echo $objFilm;
