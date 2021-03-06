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

test('Should isEmpty refill method change isEmpty', () => {
  const coffee = new Coffee()
  coffee.refill()
  expect(coffee.isEmpty()).to.be.equal(false)
})

test('Should Coffee has a drink method', () => {
  const coffee = new Coffee()
  expect(coffee.drink).to.be.a('function')
})

test('Should empty coffee if drink() is called', () => {
  const coffee = new Coffee()
  coffee.refill()
  coffee.drink()
  expect(coffee.isEmpty()).to.be.equal(true)
})
