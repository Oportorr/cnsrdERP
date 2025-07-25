/* ------------------------------------------------------------------------------
 *
 *  # Echarts - timeline
 *
 *  Timeline chart addition
 *
 *  Version: 3.0
 *  Latest update: August 1, 2015
 *
 * ---------------------------------------------------------------------------- */

var dataMap = {};
function dataFormatter(obj) {
    var pList = ['Paris','Budapest','Prague','Madrid','Amsterdam','Berlin','Bratislava','Munich','Hague','Rome','Milan'];
    var temp;
    var max = 0;
    for (var year = 2010; year <= 2014; year++) {
        temp = obj[year];
        for (var i = 0, l = temp.length; i < l; i++) {
            max = Math.max(max, temp[i]);
            obj[year][i] = {
                name : pList[i],
                value : temp[i]
            }
        }
        obj[year+'max'] = Math.floor(max/100) * 100;
    }
    return obj;
}

function dataMix(list) {
    var mixData = {};
    for (var i = 0, l = list.length; i < l; i++) {
        for (var key in list[i]) {
            if (list[i][key] instanceof Array) {
                mixData[key] = mixData[key] || [];
                for (var j = 0, k = list[i][key].length; j < k; j++) {
                    mixData[key][j] = mixData[key][j] 
                                      || {name : list[i][key][j].name, value : []};
                    mixData[key][j].value.push(list[i][key][j].value);
                }
            }
        }
    }
    return mixData;
}

dataMap.dataGDP = dataFormatter({
    2014:[16251.93,11307.28,24515.76,11237.55,14359.88,22226.7,10568.83,12582,19195.69,49110.27,32318.85],
    2013:[14113.58,9224.46,20394.26,9200.86,11672,18457.27,8667.58,10368.6,17165.98,41425.48,27722.31],
    2012:[12153.03,7521.85,17235.48,7358.31,9740.25,15212.49,7278.75,8587,15046.45,34457.3,22990.35],
    2011:[11115,6719.01,16011.97,7315.4,8496.2,13668.58,6426.1,8314.37,14069.87,30981.98],
    2010:[9846.81,5252.76,13607.32,6024.45,6423.18,11164.3,5284.69,7104,12494.01,26018.48,18753.73],
});

dataMap.dataPI = dataFormatter({
    2014:[136.27,159.72,2905.73,641.42,1306.3,1915.57,1277.44,1701.5,124.94,3064.78,1583.04],
    2013:[124.36,145.58,2562.81,554.48,1095.28,1631.08,1050.15,1302.9,114.15,2540.1,1360.56],
    2012:[118.29,128.85,2207.34,477.59,929.6,1414.9,980.57,1154.33,113.82,2261.86,1163.08],
    2011:[112.83,122.58,2034.59,313.58,907.95,1302.02,916.72,1088.94,111.8,2100.11,1095.96],
    2010:[101.26,110.19,1804.72,311.97,762.1,1133.42,783.8,915.38,101.84,1816.31,986.02],
});

dataMap.dataSI = dataFormatter({
    2014:[3752.48,5928.32,13126.86,6635.26,8037.69,12152.15,5611.48,5962.41,7927.89,25203.28,16555.58],
    2013:[3388.38,4840.23,10707.68,5234,6367.69,9976.82,4506.31,5025.15,7218.32,21753.93,14297.93],
    2012:[2855.55,3987.84,8959.83,3993.8,5114,7906.34,3541.92,4060.72,6001.78,18566.37,11908.49],
    2011:[2626.41,3709.78,8701.34,4242.36,4376.19,7158.84,3097.12,4319.75,6085.84,16993.34,11567.42],
    2010:[2509.4,2892.53,7201.88,3454.49,3193.67,5544.14,2475.45,3695.58,5571.06,14471.26,10154.25],
});

dataMap.dataTI = dataFormatter({
    2014:[12363.18,5219.24,8483.17,3960.87,5015.89,8158.98,3679.91,4918.09,11142.86,20842.21,14180.23],
    2013:[10600.84,4238.65,7123.77,3412.38,4209.03,6849.37,3111.12,4040.55,9833.51,17131.45,12063.82],
    2012:[9179.19,3405.16,6068.31,2886.92,3696.65,5891.25,2756.26,3371.95,8930.85,13629.07,9918.78],
    2011:[8375.76,2886.65,5276.04,2759.46,3212.06,5207.72,2412.26,2905.68,7872.23,11888.53,8799.31],
    2010:[7236.15,2250.04,4600.72,2257.99,2467.41,4486.74,2025.44,2493.04,6821.11,9730.91,7613.46],
});

dataMap.dataEstate = dataFormatter({
    2014:[1074.93,411.46,918.02,224.91,384.76,876.12,238.61,492.1,1019.68,2747.89,1677.13],
    2013:[1006.52,377.59,697.79,192,309.25,733.37,212.32,391.89,1002.5,2600.95,1618.17],
    2012:[1062.47,308.73,612.4,173.31,286.65,605.27,200.14,301.18,1237.56,2025.39,1316.84],
    2011:[844.59,227.88,513.81,166.04,273.3,500.81,182.7,244.47,939.34,1626.13,1052.03],
    2010:[821.5,183.44,467.97,134.12,191.01,410.43,153.03,225.81,958.06,1365.71,981.42],
});

dataMap.dataFinancial = dataFormatter({
    2014:[2215.41,756.5,746.01,519.32,447.46,755.57,207.65,370.78,2277.4,2600.11,2730.29],
    2013:[1863.61,572.99,615.42,448.3,346.44,639.27,190.12,304.59,1950.96,2105.92,2326.58],
    2012:[1603.63,461.2,525.67,361.64,291.1,560.2,180.83,227.54,1804.28,1596.98,1899.33],
    2011:[1519.19,368.1,420.74,290.91,219.09,455.07,147.24,177.43,1414.21,1298.48,1653.45],
    2010:[1302.77,288.17,347.65,218.73,148.3,386.34,126.03,155.48,1209.08,1054.25,1251.43],
});

dataMap.dataGDP_Estate = dataMix([dataMap.dataEstate, dataMap.dataGDP]);
