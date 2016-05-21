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

module.exports = Coffee
