'use strict'

const test = require('ava')
const expect = require('chai').expect
const Coffee = require('./coffee')

test('Should there is the Coffee class', () => {
  expect(Coffee).to.be.a('function')
})

test('Should Coffee has an isEmpty method', () => {
  const coffee = new Coffee()
  expect(coffee.isEmpty).to.be.a('function')
})

test('Should Coffee has a refill method', () => {
  const coffee = new Coffee()
  expect(coffee.refill).to.be.a('function')
})
