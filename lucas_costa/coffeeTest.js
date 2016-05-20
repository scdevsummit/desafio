require('chai').should();
const Coffee = require('./Coffee.js');

describe('Challenge', () => {
    const Coffee = new Coffee();

    before(() => {
    });

});

describe('Coffee', () => {
    describe('.isEmpty', () => {
        it('Should return true when coffee is empty', () => {
            const coffee = new Coffee();
            coffee.empty = true;

            coffee.isEmpty().should.be.true;
        });

        it('Should return false when coffee is full', () => {
            const coffee = new Coffee();
            coffee.empty = false;

            coffee.isEmpty().should.be.false;
        });
    });

    describe('.refill', () => {
        it('Should change coffee cup empty status to false when it is empty', () => {
            const coffee = new Coffee();
            coffee.empty = true;
            coffee.refill();

            coffee.empty.should.be.false;
        });

        it('Should throw Error when trying to fill a coffee cup which is already full', () => {
            const coffee = new Coffee();
            coffee.empty = false;

            (() => {
                coffee.refill();
            }).should.throw(Error, 'Coffee cup is already full');
            coffee.empty.should.be.false;
        });
    });

    describe('.drink', () => {
        it('Should empty coffee cup when it is full', () => {
            const coffee = new Coffee();
            coffee.empty = false;

            coffee.drink();
            coffee.empty.should.be.true;
        });

        it('Should throw Error when trying to drink from a coffee cup which is empty', () => {
            const coffee = new Coffee();
            coffee.empty = true;

            (() => {
                coffee.drink();
            }).should.throw(Error, 'Coffee cup is empty');
            coffee.empty.should.be.true;
        });
    });
});
