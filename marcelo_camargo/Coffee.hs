module Coffee (refill, drink, mug, programmersLife, Coffee, hasCoffee) where

data Coffee = Coffee {
  hasCoffee :: Bool
} deriving (Show, Eq)

refill :: Coffee -> Coffee
refill _ = Coffee { hasCoffee = True }

drink :: Coffee -> Coffee
drink _ = Coffee { hasCoffee = False }

mug :: Bool -> Coffee
mug b = Coffee { hasCoffee = b }

programmersLife :: Coffee -> IO Coffee
programmersLife coffee = let fullCoffee = refill coffee
                             emptyCoffee = drink fullCoffee
                         in return emptyCoffee
