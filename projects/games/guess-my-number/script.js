'use strict';

/*
console.log(document.querySelector(`.message`).textContent);
document.querySelector(`.message`).textContent = `Correct Number!`;
document.querySelector(`.number`).textContent = 13;
document.querySelector(`.score`).textContent = 14;

document.querySelector(`.guess`).value = 23;
console.log(document.querySelector(`.guess`).value);

*/

let secretNumber = Math.trunc(Math.random() * 20) + 1;
let score = 20;
let highscore = 0;

function displayMessage(message) {
    document.querySelector(`.message`).textContent = message;
}

document.querySelector(`.check`).addEventListener(`click`, function() {
    const guess = Number(document.querySelector(`.guess`).value);

    if(!guess) {
        displayMessage(`Please enter a number!`);
    } else if(guess === secretNumber) {
        displayMessage(`💥 That's Correct! 🎉`);
        document.querySelector(`.number`).textContent = secretNumber;
        document.querySelector(`body`).style.backgroundColor = `#60B347`;
        document.querySelector(`.number`).style.width = `30rem`;

        if(score > highscore) {
            highscore = score;
            document.querySelector(`.highscore`).textContent = highscore;
        }
        // WHEN GUESS IS WRONG ----------------
    } else if(guess !== secretNumber) {
        if(score > 1) {
            displayMessage(guess > secretNumber ? `Great guess, try a lower number!` : `Great guess, try a higher number!`);
            score--;
            document.querySelector(`.score`).textContent = score;
        } else {
            displayMessage(`Game Over 😒 Try Again?!`);
            document.querySelector(`.score`).textContent = 0;
        }
    };
        // WHEN GUESS IS TOO HIGH -----------------
    //  else if(guess > secretNumber) {  
    //     if(score > 1) {
    //         document.querySelector(`.message`).textContent = `Great guess, try a lower number!`;
    //         score--;
    //         document.querySelector(`.score`).textContent = score;
    //     } else {
    //         document.querySelector(`.message`).textContent = `Game Over 😒 Try Again?!`;
    //         document.querySelector(`.score`).textContent = 0;
    //     }
            // WHEN GUESS IS TOO LOW -----------------------
    // } else if(guess < secretNumber) { 
    //     if(score > 1) {
    //         document.querySelector(`.message`).textContent = `Great guess, try a higher number!`;
    //         score--;
    //         document.querySelector(`.score`).textContent = score;
    //     } else {
    //         document.querySelector(`.message`).textContent = `Game Over 😒 Try Again?!`;
    //         document.querySelector(`.score`).textContent = 0;
    //     }
    // };
});

document.querySelector(`.again`).addEventListener(`click`, function() {
    score = 20;
    secretNumber = Math.trunc(Math.random() * 20) + 1;
    displayMessage(`Start Guessing...`);
    document.querySelector(`.score`).textContent = score;
    document.querySelector(`.number`).textContent = `?`;
    document.querySelector(`.guess`).value = ``;
    document.querySelector(`body`).style.backgroundColor = `#222`;
    document.querySelector(`.number`).style.width = `15rem`;
});