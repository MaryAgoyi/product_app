export const inputs =[
    {
    id:"#name",
    name:"name",
    type:"text",
    placeholder:"#Name",
    label:"Name",
    errormessage:"name should be at least 1 alphanumeric",
    required:true
},
{
    id:"#price",
    name:"price",
    type:"number",
    placeholder:"#Price",
    label:"Price ($)",
    errormessage:"price should be a number ",
    pattern:"^([1-9][0-9]{0,2}|1000)$",
    required:true
}


]

export const array=[
      [],
[
    {
        id:"#height",
        name:"height",
        type:"number",
        placeholder:"#Height",
        label:"Height(CM)",
        errormessage:"height should be a number ",
        required:true,
        pattern:"^([1-9][0-9]{0,2}|1000)$"
    },
    {
        id:"#width",
        name:"width",
        type:"number",
        placeholder:"#Width",
        label:"Width (CM)",
        errormessage:"width should be a number ",
        required:true,
        pattern:"^([1-9][0-9]{0,2}|1000)$"
    },{
        id:"#length",
        name:"length",
        type:"number",
        placeholder:"#Length",
        label:"Length (CM)",
        errormessage:"length should be a number ",
        required:true,
        pattern:"^([1-9][0-9]{0,2}|1000)$"
    }
    
],[
    {
    
        id:"#size",
        name:"size",
        type:"number",
        placeholder:"#Size",
        label:"Size (MB)",
        errormessage:"size should be a number ",
        pattern:"^([1-9][0-9]{0,2}|1000)$",
        required:true,
        
    }
],[
    {
    
        id:"#weight",
        name:"weight",
        type:"number",
        placeholder:"#Weight",
        label:"Weight(KG) ",
        errormessage:"weight should be a number ",
        pattern:"^([1-9][0-9]{0,2}|1000)$",
        
        required:true,
        
    }
]

  ]