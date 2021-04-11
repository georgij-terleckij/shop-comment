"# shop-comment" 

You need import shop-db-export.sql or create 
products:
    id - int(10) AUTO_INCREMENT UNSIGNED,
    name - varchar(255),
    user_name - varchar(255),
    img - varchar(255),
    price - varchar(255),
    appraisal - int(11),
    created_at - timestamp,
    updated_at - timestamp,
    
comments: 
    id - int(10) AUTO_INCREMENT UNSIGNED,
    user_name - varchar(255),
    text - text,
    appraisal - int(11),
    product_id - int(11),
    created_at - timestamp,
    updated_at - timestamp,
    
Use composer install

