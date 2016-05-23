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


function Coffee:drink()
    if(self.empty) then
        error("Error: Has no coffee to drink.")
    end
    self.empty = true
end


function Coffee:refill()
    if(not self.empty) then
        error("Error: The coffee isn't empty.")
    end
    self.empty = false
end


return Coffee