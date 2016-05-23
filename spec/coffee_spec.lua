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

end)
