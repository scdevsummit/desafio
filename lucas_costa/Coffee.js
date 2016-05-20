function Coffee() {
    this.empty = true;
}

Coffee.prototype.refill = function() {
    if (!this.empty) {
        throw new Error('Coffee cup is already full');
    }

    this.empty = false;
};

Coffee.prototype.drink = function() {
    if (this.empty) {
        throw new Error('Coffee cup is empty');
    }

    this.empty = true;
};

Coffee.prototype.isEmpty = function() {
    return this.empty;
};

module.exports = Coffee;
