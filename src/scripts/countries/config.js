var config = config || {};

config.methodName = 'countries';

config.deleteErrorMessage = 'Невозможно удалить выбранную страну, так как уже существуют туры с ней.';

config.searchDataPromise = [];
config.exceptFields = ['id'];