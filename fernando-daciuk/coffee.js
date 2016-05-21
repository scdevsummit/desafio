'use strict'

function Coffee () {
  this.empty = true
}

Coffee.prototype.isEmpty = function () {
  return this.empty
}

Coffee.prototype.refill = function () {
  this.empty = false
}

Coffee.prototype.drink = function () {}

module.exports = Coffee
