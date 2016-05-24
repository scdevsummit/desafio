module Main where
import Test.HUnit
import Coffee

testList :: Test
testList = TestList [ "drinkCoffeeMakesItEmpty"  ~: (drink $ mug True) ~=? (mug False),
                      "afterRefillWeHaveCoffee"  ~: (refill $ mug False) ~=? (mug True),
                      "coffeeEmptyAfterProgLife" ~:
                        (programmersLife $ mug True)
                          >>= \coffee -> return $ assertEqual "After drink" coffee (mug False) ]

main :: IO Counts
main = runTestTT testList
