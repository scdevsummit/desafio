local Coffee = {}
Coffee.__index = Coffee

function Coffee.create()
    local coffee = {}
    
    setmetatable(coffee, Coffee)
    coffee.empty = true
    
    return coffee
end

function Coffee:isEmpty()
    return self.empty
end


return Coffee