# Moment 2 
Url för att använda CRUD: http://127.0.0.1:8000/api/hobbies 

## Om Momentet 
Momentet går ut på att med hjälp av backend-ramverk skapa en restwebbtjänst för CRUD funktionalitet. 
Jag har med hjälp av Laravel skapat en restwebbtjänst som kan lägga till, uppdatera, visa och radera min tabell från min localhost. 

### Använding 
Jag har med hjälp av URL: http://127.0.0.1:8000/api/hobbies testkört CRUD i thunder Client. 
Jag har skapat funktionalitet för GET, POST, PUT och DELETE. 

GET - när jag skickar ovan URL mot GET får jag innehållet i databasen med id, place, kilometers, visited, created_at och updated_at. 

POST - när jag skickar ovan URL mot POST skickar jag först med ett värde för place, kilometers och visited via JSON innan jag skickar POST. Det resulterar i att mina värden läggs till i databasen. 

PUT - Här behöver jag inhämta ett ID från någon av mina värden i databasen, eftersom PUT kan ändra/uppdatera. Jag behöver därför ändra URL till exempelvis http://127.0.0.1:8000/api/hobbies/1. Här kan jag ändra värderna för ID 1. Jag ändrar genom JSON och lägger in ett nutt värde innan jag skickar. Värdet i databasen har då ändrats. 

DELETE - Likt PUT så behöver jag även här inhämtad ett ID och URL blir då exempelvis http://127.0.0.1:8000/api/hobbies/1. skickar jag URL så raderar jag all data för ID 1 i min databas. 