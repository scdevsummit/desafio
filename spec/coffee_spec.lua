describe("Coffee", function()
    local Coffee --Module
    local coffee --Instance


    setup(function()
        Coffee = require "coffee"
    end)

    before_each(function()
        coffee = Coffee.create()
    end)

    describe(":isEmpty()", function()

        it(" - Should return false when coffee is empty", function() 
            coffee.empty = true
            assert.is_true(coffee:isEmpty())
        end)

        it(" - Should return true when coffee is not empty", function()
            coffee.empty = false
            assert.is_false(coffee:isEmpty())
        end)

    end)

    describe(":drink()", function()
        
        it("Should empty the coffee if it's full", function()
            
            coffee.empty = false
            coffee:drink()
            assert.is_true(coffee.empty)
            
        end)

        it("Should throw a exception when the coffee is empty", function()

            coffee.empty = true
            assert.has_errors(function() coffee:drink() end, "Error: Has no coffee to drink.")
            assert.is_true(coffee.empty)
            
        end)

    end)

    describe(":refill", function()
    
        it("Should fill the coffee cup, setting false to empty ", function()

            coffee.empty = true
            coffee:refill()
            assert.is_false(coffee.empty)

        end)

    end)

end)
