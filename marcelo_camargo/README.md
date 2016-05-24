### Haskell implementation

This is a TDD example using Haskell and pure computations with monads to deal with and to simulate side-effects. Everything is pure and imutable. The type system can assert most of the things without our intervention.

#### Install dependencies
`sudo cabal install hunit`

#### Run the tests
`ghci CoffeeTest.hs`

#### Exported Algebraic Data Types
- `Coffee`

#### Exported Functions
- `refill`
- `drink`
- `mug`
- `programmersLife`
- `hasCoffee`
